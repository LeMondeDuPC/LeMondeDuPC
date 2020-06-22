/*
* Youtube Embed Plugin
*
* @author Jonnas Fonini <jonnasfonini@gmail.com>
* @version 2.1.14
*/
(function () {
    CKEDITOR.plugins.add('youtube', {
        lang: ['en', 'bg', 'pt', 'pt-br', 'ja', 'hu', 'it', 'fr', 'tr', 'ru', 'de', 'ar', 'nl', 'pl', 'vi', 'zh', 'el', 'he', 'es', 'nb', 'nn', 'fi', 'et', 'sk', 'cs', 'ko', 'eu', 'uk'],
        init: function (editor) {
            editor.addCommand('youtube', new CKEDITOR.dialogCommand('youtube', {
                allowedContent: 'div{*}(*); iframe{*}[!width,!height,!src,!frameborder,!allowfullscreen,!allow]; object param[*]; a[*]; img[*]'
            }));

            editor.ui.addButton('Youtube', {
                label: editor.lang.youtube.button,
                toolbar: 'insert',
                command: 'youtube',
                icon: this.path + 'images/icon.png'
            });

            CKEDITOR.dialog.add('youtube', function (instance) {
                var video,
                    disabled = editor.config.youtube_disabled_fields || [];

                return {
                    title: editor.lang.youtube.title,
                    onShow: function () {
                        for (var i = 0; i < disabled.length; i++) {
                            this.getContentElement('youtubePlugin', disabled[i]).disable();
                        }
                    },
                    contents:
                        [
                            {
                                id: 'youtubePlugin',
                                expand: true,
                                elements:
                                    [
                                        {
                                            type: 'hbox',
                                            widths: ['70%', '15%', '15%'],
                                            children:
                                                [
                                                    {
                                                        id: 'txtUrl',
                                                        type: 'text',
                                                        label: editor.lang.youtube.txtUrl,
                                                        validate: function () {
                                                            if (this.isEnabled()) {
                                                                if (!this.getValue()) {
                                                                    alert(editor.lang.youtube.noCode);
                                                                    return false;
                                                                } else {
                                                                    video = ytVidId(this.getValue());

                                                                    if (this.getValue().length === 0 || video === false) {
                                                                        alert(editor.lang.youtube.invalidUrl);
                                                                        return false;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                ]
                                        }
                                    ]
                            }
                        ],
                    onOk: function () {
                        var content = '<div class="youtube_player" videoID="' + video + '" theme = "theme light" controls = "controls 1" showinfo = "showinfo 1"></div>';

                        var element = CKEDITOR.dom.element.createFromHtml(content);
                        var instance = this.getParentEditor();
                        instance.insertElement(element);

                        var fakeElement = editor.createFakeElement(element, 'test', 't_test', false);

                        editor.insertElement(fakeElement);
                    }
                };
            });
        }
    });
})();

/**
 * JavaScript function to match (and return) the video Id
 * of any valid Youtube Url, given as input string.
 * @author: Stephan Schmitz <eyecatchup@gmail.com>
 * @url: http://stackoverflow.com/a/10315969/624466
 */
function ytVidId(url) {
    var p = /^(?:https?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed\/|v\/|watch\?v=|watch\?.+&v=))((\w|-){11})(?:\S+)?$/;
    return (url.match(p)) ? RegExp.$1 : false;
}