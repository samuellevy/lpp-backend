$(document).ready(function() {
    $(".BoxEvent").hide();

    //responder chamado
    $(".NewEventBtn").click(function() {
        var action = $(this).attr("data-action");
        $(".BoxEvent").hide();
        $(".BoxEvent[data-action=" + action + "]").show();
    });

    //upload de imagens
    $(".form-img").click(function() {
        $(this)
            .next()
            .click();
    });

    $("input[type=file]").change(function() {
        readURL(this, $(this).prev());
    });

    //mostra imagem local
    function readURL(input, target) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                target.attr("src", e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".remove").click(function() {
        var uid = $(this).attr("data-uid");

        removeFileFromServer(uid);
        $(".form-img[data-uid=" + uid + "]").attr(
            "src",
            "http://via.placeholder.com/270x270"
        );
        $(".remove[data-uid=" + uid + "]").hide();
        $(".form-file[data-uid=" + uid + "]").val("");
    });

    //initial tests

    $(".smalleditor").each(function(e) {
        CKEDITOR.replace(this, {
            height: 120,
            /* Default CKEditor styles are included as well to avoid copying default styles. */
            customConfig: "./small.js"
        });
    });

    // delete a banner
    $(document).on("click", ".close-button", function() {
        const id = $(this).attr("data-id");
        console.log(id);
        $(`.banner-component[data-id="${id}"]`)
            .fadeOut()
            .remove();
    });

    $(document).on("click", ".add_banner", function() {
        const module_id = $(this).attr("module-id");
        const module_key = $(this).attr("module-key");

        const banner_key = $(`.banner-component[module-id=${module_id}]`)
            .length;

        createBanner(module_id, module_key, banner_key);
        console.log(banner_key);
    });
});

function createBanner(module_id, module_key, banner_key) {
    // console.log(component);
    const module = $("li.module").length;

    let banner = `
    <div class="row row-dashed banner-component" data-id="banner-4" module-id="${module_id}">
        <button type="button" class="close-button" data-id="banner-4">x</button>
        <div class="col-md-3 flex-options">
            <label>Imagem</label>
            <img src="https://via.placeholder.com/360X165/C2C2C2/808080/?text=Selecione%20a%20imagem" class="scaled-img" data-uid="439" alt="">
            <div class="input file">
                <label for="pages-components-${module_key}-banners-${banner_key}-file-filename">Arquivo</label>
                <input type="file" name="pages_components[${module_key}][banners][${banner_key}][file][filename]" class="" id="pages-components-${module_key}-banners-${banner_key}-file-filename">
            </div>
            <input type="hidden" name="pages_components[${module_key}][banners][${banner_key}][file][entity]" class="" label="Arquivo" value="Banner">
        </div>

        <div class="col-md-3 flex-options">
            <div class="input text">
                <label for="pages-components-${module_key}-banners-${banner_key}-title">Título</label>
                <input type="text" name="pages_components[${module_key}][banners][${banner_key}][title]" class="form-control" maxlength="255" id="pages-components-${module_key}-banners-${banner_key}-title" value="">
            </div>
            <div class="input text">
                <label for="pages-components-${module_key}-banners-${banner_key}-text-button">Chamada do botão</label>
                <input type="text" name="pages_components[${module_key}][banners][${banner_key}][text_button]" class="form-control" maxlength="255" id="pages-components-${module_key}-banners-${banner_key}-text-button" value="">
            </div>
            <div class="input text">
                <label for="pages-components-${module_key}-banners-${banner_key}-class">Classe do botão (blue, green, etc)</label>
                <input type="text" name="pages_components[${module_key}][banners][${banner_key}][class]" class="form-control" maxlength="15" id="pages-components-${module_key}-banners-${banner_key}-class" value="blue">
            </div>
            <div class="input text">
                <label for="pages-components-${module_key}-banners-${banner_key}-url">Url</label>
                <input type="text" name="pages_components[${module_key}][banners][${banner_key}][url]" class="form-control" maxlength="255" id="pages-components-${module_key}-banners-${banner_key}-url" value="">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input textarea">
                <label for="pages-components-${module_key}-banners-${banner_key}-text">Texto</label>
                <textarea name="pages_components[${module_key}][banners][${banner_key}][text]" class="new_editor" id="pages-components-${module_key}-banners-${banner_key}-text" rows="5"></textarea>
            </div>
        </div>
    </div>`;

    $(`.banner-content[module-id=${module_id}]`).append(banner);

    turnRichEditor(`pages-components-${module_key}-banners-${banner_key}-text`);
    // console.log(banner);
}

function turnRichEditor(query_selector) {
    CKEDITOR.replace(query_selector, {
        height: 120,
        /* Default CKEditor styles are included as well to avoid copying default styles. */
        customConfig: "./small.js"
    });
}

function changeStatus(model, field, id) {
    var responder = "";

    $.ajax({
        headers: { token },
        url: "./" + model + "/changeStatus/" + id,
        cache: false,
        data: { status: "toggle", field: field },
        method: "POST"
    }).done(function(html) {
        responder = html;
    });
}

$(".sidebar-dropdown a").click(function() {
    var id = $(this)
        .parent(".sidebar-dropdown")
        .attr("data-id");
    $(".sidebar-dropdown[data-id=" + id + "] ul").toggleClass(
        "show-sidebar-dropdown"
    );
    $(".sidebar-dropdown[data-id=" + id + "] .i-absolute").toggleClass(
        "i-absolute-transform"
    );
});
