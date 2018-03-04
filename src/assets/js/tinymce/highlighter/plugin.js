(function() {
  tinymce.PluginManager.add('highlighter', function(editor, url) {
    editor.addButton('highlighter', {
      title: wp_awesome_components_text.highlighter,
      text: false,
      icon: 'mce-ico mce-i-backcolor',
      onclick: function() {
        var selectedText = editor.selection.getContent();
        if (selectedText) {
          editor.execCommand('mceInsertContent', 0, '<span class="wpac-highlighter">' + selectedText + '</span>');
        }
      }
    });
  });
})();
