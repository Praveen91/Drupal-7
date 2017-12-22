 (function ($) {
 $(document).ready(function(){
      $('#user_image').on("click", function(event){
        $('#edit-user-picture')[0].click();
        //document.getElementById("edit-user-picture").click();
        $('input[type=file]').on('change', function () {
            $('input[type=submit]#edit-submit').mousedown();
        });
      });
   });
})(jQuery);


