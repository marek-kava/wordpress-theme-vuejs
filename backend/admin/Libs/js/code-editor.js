'use strict';
(function ($) {
    $(function () {
        if ($('#code_editor_page_js').length) {
            var editorSettings = wp.codeEditor.defaultSettings ? _.clone(wp.codeEditor.defaultSettings) : {};
            editorSettings.codemirror = _.extend(
                {},
                editorSettings.codemirror,
                {
                    indentUnit: 2,
                    tabSize: 2,
                    lineNumbers: true,
                    mode: 'htmlmixed',
                }
            );
            var editor = wp.codeEditor.initialize($('#code_editor_page_js'), editorSettings);
        }
    });
})(jQuery);