jQuery(function($) {
  var launchButton   = $('#button-wp-awesome-components');
  var modal          = $('#wpac-modal');
  var closeButton    = $('#wpac-modal-close-btn');
  var insertButton   = $('#wpac-modal-insert-btn');
  var selectorItems  = modal.find('.wpac-modal-selector__item');
  var previewWindows = modal.find('.wpac-modal-preview');

  launchButton.click(function(event) {
    event.preventDefault();
    modal.attr('aria-hidden', 'false');
    selectorItems.attr('aria-selected', 'false');
    previewWindows.attr('aria-hidden', 'true');
    selectorItems.first().attr('aria-hidden', 'false');
    var target = $('#' + selectorItems.first().attr('aria-controls'));
    target.attr('aria-hidden', 'false');
  });

  closeButton.click(function(event) {
    event.preventDefault();
    modal.attr('aria-hidden', 'true');
  });

  modal.click(function(event) {
    event.preventDefault();
    $(this).attr('aria-hidden', 'true');
  });

  modal.find('.wpac-modal__container').click(function(event) {
    event.stopPropagation();
  });

  selectorItems.click(function(event) {
    event.preventDefault();
    selectorItems.attr('aria-selected', 'false');
    previewWindows.attr('aria-hidden', 'true');
    $(this).attr('aria-selected', 'true');
    var target = $('#' + $(this).attr('aria-controls'));
    target.attr('aria-hidden', 'false');
  });

  $(window).load(function() {
    insertButton.click(function(event) {
      event.preventDefault();

      if (1 > $('#content_ifr').length) {
        return;
      }

      var content = modal.find('.wpac-modal-preview[aria-hidden="false"] .wpac-modal-preview__content').html().trim();
      tinymce.get('content').execCommand('mceInsertContent', false, content);
      $('.wpac-modal').attr('aria-hidden', 'true');
    });
  });

  function setVisibilityLaunchButton() {
    if ($('#wp-content-wrap').hasClass('tmce-active')) {
      launchButton.show();
    } else {
      launchButton.hide();
    }
  }

  setVisibilityLaunchButton();
  $(window).load(function(event) {
    setVisibilityLaunchButton();
  });
  $('#wp-content-wrap .wp-switch-editor').on('click', function() {
    setTimeout(function() {
      setVisibilityLaunchButton();
    }, 100);
  });
});
