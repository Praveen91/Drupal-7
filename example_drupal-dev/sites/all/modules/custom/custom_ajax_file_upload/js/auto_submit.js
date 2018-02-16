 (function ($) {
 $(document).ready(function(){
      $('#user_image').on("click", function(event){
		  alert('2');
        $('#edit-user-picture-upload').click();
        //document.getElementById("edit-user-picture").click();
        $('input[type=file]').on('change', function () {
            $('input[type=submit]#edit-submit').mousedown();
        });
      });
   });
})(jQuery);


