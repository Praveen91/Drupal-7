// mymodule/js/webform_1.js
!(function ($) {
  'use strict';
  Drupal.behaviors.WebformConfig = {
    attach: function(context) {
      var $contact = $('input[name="submitted[reason_for_contact]"]');
      $contact.parents('#edit-submitted-reason-for-contact').append('<div class="reason-icon"></div>');
      var $icon = $('.reason-icon');

      $contact.on('change', function (event) {
        var value = $(this).val();

        if (value == 'strategy') {
          $icon.html('<i class="glyphicon glyphicon-knight"></i>');
        }
        else if (value == 'theme_form') {
          $icon.html('<i class="glyphicon glyphicon-pencil"></i>');
          console.log('Theme Form');
        }
        else {
          $icon.html('<i class="glyphicon glyphicon-info-sign"></i>');
        }
      });
    }
  };
})(jQuery);
