CKEDITOR.on('instanceReady', function (evt) {
    evt.editor.dataProcessor.htmlFilter.addRules({
        elements: {
            img: function (el) {
                if(!el.hasClass('image')) {
                    el.addClass('image');
                }
                if(!el.hasClass('featured')) {
                    el.addClass('featured');
                }
                if (el.attributes.alt === '') {
                    el.attributes.alt = 'Image explicative de l\'article';
                }
            },
        }
    });
    evt.editor.dataProcessor.writer.selfClosingEnd = ' />';

    // Use line breaks for block elements, tables, and lists.
    let dtd = CKEDITOR.dtd;
    for (let e in CKEDITOR.tools.extend({}, dtd.$nonBodyContent, dtd.$block, dtd.$listItem, dtd.$tableContent)) {
        evt.editor.dataProcessor.writer.setRules(e, {
            indent: true,
            breakBeforeOpen: true,
            breakAfterOpen: true,
            breakBeforeClose: true,
            breakAfterClose: true
        });
    }
});