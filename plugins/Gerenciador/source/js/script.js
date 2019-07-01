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
        const id = $(this).attr("data-component");
        createBanner(id);
    });
});

function createBanner(component) {
    console.log(component);

    let banner = `
    <div class="row row-dashed banner-component" data-id="banner-4" data-component="1">
        <button type="button" class="close-button" data-id="banner-4">x</button>
        <div class="col-md-3 flex-options">
            <label>Imagem</label>
            <img src="/img/../uploads/files/0b0aad53-7756-4e22-8180-4bc8fbf78d4e.png" class="scaled-img" data-uid="439" alt="">
            <div class="input file">
                <label for="pages-components-0-banners-2-file-filename">Arquivo</label>
                <input type="file" name="pages_components[3][banners][0][file][filename]" class="" id="pages-components-0-banners-2-file-filename">
            </div>
            <input type="hidden" name="pages_components[3][banners][0][file][entity]" class="" label="Arquivo" value="Banner">
        </div>

        <div class="col-md-3 flex-options">
            <input type="hidden" name="pages_components[3][banners][0][page_component_id]" value="4">
            <div class="input text">
                <label for="pages-components-0-banners-2-title">Título</label>
                <input type="text" name="pages_components[3][banners][0][title]" class="form-control" maxlength="255" id="pages-components-0-banners-2-title" value="Fighting for a world with more peace, equality and solidarity">
            </div>
            <div class="input text">
                <label for="pages-components-0-banners-2-text-button">Chamada do botão</label>
                <input type="text" name="pages_components[3][banners][0][text_button]" class="form-control" maxlength="255" id="pages-components-0-banners-2-text-button" value="JOIN THE FIGHT">
            </div>
            <div class="input text">
                <label for="pages-components-0-banners-2-class">Classe do botão (blue, green, etc)</label>
                <input type="text" name="pages_components[3][banners][0][class]" class="form-control" maxlength="15" id="pages-components-0-banners-2-class" value="blue">
            </div>
            <div class="input text">
                <label for="pages-components-0-banners-2-url">Url</label>
                <input type="text" name="pages_components[3][banners][0][url]" class="form-control" maxlength="255" id="pages-components-0-banners-2-url" value="#">
            </div>
        </div>

        <div class="col-md-6">
            <div class="input textarea">
                <label for="pages-components-0-banners-2-text">Texto</label>
                <textarea name="pages_components[3][banners][0][text]" class="smalleditor" id="pages-components-0-banners-2-text" rows="5">
                    
                </textarea>
            </div>
        </div>
    </div>`;

    $(`.banner-content[data-component=1]`).append(banner);

    console.log(banner);
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
