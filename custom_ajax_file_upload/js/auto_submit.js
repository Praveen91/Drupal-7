 (function ($) {
 $(document).ready(function(){
      jQuery('#edit_img').on("click", function(){
        $('#edit-user-picture').click();
        document.getElementById("edit-user-picture").click();
        jQuery('input[type=file]').on('change', function () {
            $('input[type=submit]#edit-submit').mousedown();
        });
      });
   });
})(jQuery);
