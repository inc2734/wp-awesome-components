jQuery(function($) {

  /**
   * Cleate component preview
   */
  $('#wpac-modal').each(function(i, e) {
    var style = $(e).find('.wpac-modal__iframe-style');

    $(e).find('.wpac-modal-preview').each(function(i, e) {
      var iframe  = $(e).find('.wpac-modal-preview__iframe');
      var content = $(e).find('.wpac-modal-preview__content');
      var h       = $('<div />').append(style.val());
      var head    = h.find('link[rel="stylesheet"], style');
      iframe.contents().find('head').append(head);
      iframe.contents().find('body').html(content.clone(false));
      iframe.contents().find('body').addClass('mce-content-body mceContentBody');
    });
  });

  /**
   * Modal open button
   */
  $(document).on('click', '#button-wp-awesome-components', function(event) {
    event.preventDefault();

    var modal          = $('#wpac-modal');
    var selectorItems  = modal.find('.wpac-modal-selector__item');
    var previewWindows = modal.find('.wpac-modal-preview');

    modal.attr('aria-hidden', 'false');
    selectorItems.attr('aria-selected', 'false');
    previewWindows.attr('aria-hidden', 'true');
    selectorItems.first().attr('aria-hidden', 'false');
    var target = $('#' + selectorItems.first().attr('aria-controls'));
    target.attr('aria-hidden', 'false');
  });

  /**
   * Modal close button
   */
  $(document).on('click', '#wpac-modal-close-btn', function(event) {
    event.preventDefault();

    var modal = $('#wpac-modal');
    modal.attr('aria-hidden', 'true');
  });

  /**
   * Modal background
   */
  $(document).on('click', '#wpac-modal', function(event) {
    event.preventDefault();
    $(this).attr('aria-hidden', 'true');
  });

  /**
   * Modal
   */
  $(document).on('click', '#wpac-modal .wpac-modal__container', function(event) {
    event.stopPropagation();
  });

  /**
   * Component select menu in the modal
   */
  $(document).on('click', '#wpac-modal .wpac-modal-selector__item', function(event) {
    event.preventDefault();

    var modal          = $('#wpac-modal');
    var selectorItems  = modal.find('.wpac-modal-selector__item');
    var previewWindows = modal.find('.wpac-modal-preview');

    selectorItems.attr('aria-selected', 'false');
    previewWindows.attr('aria-hidden', 'true');
    $(this).attr('aria-selected', 'true');
    var target = $('#' + $(this).attr('aria-controls'));
    target.attr('aria-hidden', 'false');
  });

  /**
   * Component insert button
   */
  $(window).load(function() {
    $(document).on('click', '#wpac-modal-insert-btn', function(event) {
      event.preventDefault();

      var modal   = $('#wpac-modal');
      var content = modal.find('.wpac-modal-preview[aria-hidden="false"] .wpac-modal-preview__content');

      if (0 < content.length) {
        tinymce.activeEditor.selection.setContent(content.html().trim());
      }

      modal.attr('aria-hidden', 'true');
    });
  });

  function setVisibilityLaunchButton() {
    var launchButton = $('#button-wp-awesome-components');

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
