<!-- //dpm($variables); -->

<div class="ml128 mr128">
  <div class="mt64 mb64"></div>
  <div class="fullwidth">
     <div class="col-md-6">
          <div class="fullwidth">
             <?php print drupal_render($form['tutor_fname']); ?>
             <?php print drupal_render($form['tutor_lname']); ?>
             <?php print drupal_render($form['tutor_email']); ?>

             <?php print drupal_render($form['tutor_mobile']); ?>

             <?php print drupal_render($form['pass']); ?>
          </div>
          <div class="fullwidth mb64">
             <?php print drupal_render($form['submit']); ?>
          </div>
      </div>
      <div class="col-md-3">
          <div class="fullwidth text-center mt64">
            <!-- <img class="white-border-8" src="<?php //echo default_profile_pic_update($user->uid); ?>"> -->
            <?php print drupal_render($form['tutor_picture_up']); ?>
            <?php print drupal_render($form['tutor_picture_default']); ?>
            <?php print drupal_render($form['tutor_picture_submit']); ?>

          </div>
          <div class="fullwidth mt16 text-center">
            <a id="edit-profile-photo" class="CTAGhost-b6 CTAGhost-Small">Change Photo</a>
          </div>
      </div>
              <?php print drupal_render_children($form) ?>
  </div>

</div>
