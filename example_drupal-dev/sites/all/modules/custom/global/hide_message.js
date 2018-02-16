/**
 * Drupal Behavior
 */
 (function ($) {
     Drupal.behaviors.customJS = {
      attach: function(context, settings) {
        $('.messages').once('custom-hide', function(){
          $('.messages').delay(10000).hide('slow');
        });
      }
     }
 })(jQuery);
