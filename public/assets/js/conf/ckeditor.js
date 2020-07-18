CKEDITOR.on('instanceReady', function (evt) {
    evt.editor.dataProcessor.htmlFilter.addRules({
        elements: {
            img: function (el) {
                el.attributes.alt = 'Image explicative de l\'article';
                el.attributes.class = 'image featured';
                reset(el);
            },
            p: function (el) {
                reset(el);
            },
            div: function (el) {
                reset(el);
            },
            td: function (el) {
                reset(el);
            },
        }
    });
    this.dataProcessor.writer.selfClosingEnd = ' />';

    // Use line breaks for block elements, tables, and lists.
    let dtd = CKEDITOR.dtd;
    for (let e in CKEDITOR.tools.extend({}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent)) {
        this.dataProcessor.writer.setRules(e, {
            indent: true,
            breakBeforeOpen: true,
            breakAfterOpen: true,
            breakBeforeClose: true,
            breakAfterClose: true
        });
    }
});

function reset(el) {
    el.attributes.style = null;
    el.attributes.width = null;
    el.attributes.height = null;
}