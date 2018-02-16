
(function ($) {
  Drupal.behaviors.autoUpload = {
    attach: function (context, settings) {
      $('form', context).delegate('input.form-file', 'change', function() {
        $(this).next('input[type="submit"]').mousedown();
        $(this).next('button[type="submit"]').mousedown();
        $('#edit-image-file-manage-upload-button button[type="submit"]').mousedown();
        $(this).next('#edit-image-file-manage-upload-button').trigger('click');

        $('#edit-image-file-manage-upload-button').on('click', function() {

   console.log("Clicked!");

  })

      });

      $('form', context).delegate('input.form-file', 'change', function() {
        //alert('111');
        $(this).next('input[type="submit"]').mousedown();
      });

     /* $('form', context).delegate('#edit-image-file', 'change', function() {
        alert('22');
        $(this).next('button[type="submit"]').mousedown();
        //$(this).next('#edit-upload').mousedown();
      });*/

    }
  };



  /* $(document).ready(function(){
      $('#edit_img').bind("click", function(){
       // $('#edit-user-picture').click();
        clickid = "edit-user-picture";
        document.getElementById(clickid).click();
        jQuery('input[type=file]').on('change', function () {
            clicksubid = "edit-submit";
            document.getElementById(clicksubid).click();
        });
      });
   });*/
})(jQuery);
