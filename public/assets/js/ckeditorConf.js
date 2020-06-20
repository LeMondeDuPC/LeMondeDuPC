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
});