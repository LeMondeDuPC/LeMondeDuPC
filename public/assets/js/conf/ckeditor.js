CKEDITOR.on('instanceReady', function (evt) {
    evt.editor.dataProcessor.htmlFilter.addRules({
        elements: {
            img: function (el) {
                el.attributes.alt = 'Image explicative de l\'article';
                el.attributes.class = 'image featured';
                el.attributes.style = null;
            }
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