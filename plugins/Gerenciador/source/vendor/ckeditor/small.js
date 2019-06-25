CKEDITOR.editorConfig = function(config) {
    config.toolbarGroups = [
        { name: "basicstyles", groups: ["basicstyles", "cleanup"] },
        {
            name: "paragraph"
        }
    ];

    // Remove some buttons provided by the standard plugins, which are
    // not needed in the Standard(s) toolbar.

    // Set the most common block elements.
    config.format_tags = "p;h1;h2;h3;pre";
    var baseHref = document.getElementsByTagName("base")[0].href;

    // Simplify the dialog windows.
    config.removeDialogTabs = "link:advanced";
    config.filebrowserBrowseUrl =
        baseHref + "../kcfinder-3.12/browse.php?type=files";
    config.filebrowserImageBrowseUrl =
        baseHref + "../kcfinder-3.12/browse.php?type=files";
    // config.filebrowserUploadUrl = baseHref + '../kcfinder-3.12/core/connector/php/connector.php?command=QuickUpload&type=Files';
    // config.filebrowserImageUploadUrl = baseHref + '../kcfinder-3.12/core/connector/php/connector.php?command=QuickUpload&type=Images';

    config.allowedContent = true;
    config.extraAllowedContent = "div(*)";
    config.removeDialogTabs = "link:upload";
    config.fillEmptyBlocks = false;
    config.autoParagraph = false;

    config.extraPlugins = "colorbutton,colordialog,font,widget,dialog,image2";
    config.colorButton_enableMore = true;
};
