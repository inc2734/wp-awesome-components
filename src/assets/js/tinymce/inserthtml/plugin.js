tinymce.PluginManager.add('inserthtml', function(editor, url) {
  editor.addButton('inserthtml', {
    text: false,
    icon: 'mce-ico mce-i-code',
    onclick: function() {
      editor.windowManager.open({
        title: 'Insert HTML',
        body: [
          {
            type: 'textbox',
            name: 'code',
            multiline: true,
            style: "width: 400px; max-width: 80vw; height: 80px;"
          }
        ],
        onsubmit: function(e) {
          editor.insertContent(e.data.code);
        }
      });
    }
  });
});
