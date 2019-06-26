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
    $(".close-button").click(function() {
        const id = $(this).attr("data-id");
        $(`.banner-component[data-id="${id}"]`)
            .fadeOut()
            .remove();
    });
});

function removeFileFromServer(id) {
    var responder = "";
    $.ajax({
        url: "./public/delete_file/" + id,
        cache: false
    }).done(function(html) {
        responder = html;
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
