 (function ($) {
 jQuery(document).ready(function(){
      jQuery('#edit_img').bind("click", function(){
       // $('#edit-user-picture').click();
        clickid = "edit-user-picture";
        document.getElementById(clickid).click();
        jQuery('input[type=file]').on('change', function () {
            clicksubid = "edit-submit";
            document.getElementById(clicksubid).click();
        });
      });
   });
})(jQuery);
