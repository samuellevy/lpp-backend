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
    let count_banners = $(`.banner-component[data-component="${component}"]`)
        .length;
    let boilerplate = $(".boilerplate").html();
    let random_id = Math.floor(Math.random() * 26) + Date.now();
    boilerplate = boilerplate.replace(
        /banner-component-boilerplate/g,
        "banner-component"
    );
    boilerplate = boilerplate.replace(
        /pages_components_boilerplate/g,
        "pages_components"
    );
    boilerplate = boilerplate.replace(/{banner_id}/g, random_id);
    boilerplate = boilerplate.replace(/{key}/g, component);
    boilerplate = boilerplate.replace(/{banner_key}/g, count_banners);
    $(`.banner-content[data-component="${component}"]`).append(boilerplate);

    /** colocar ckeditor */
    // CKEDITOR.replace(textarea, {
    //     height: 120,
    //     /* Default CKEditor styles are included as well to avoid copying default styles. */
    //     customConfig: "./small.js"
    // });
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
