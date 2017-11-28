<!-- //dpm($variables); -->

<div class="form-two">
    <div class="your-email">
       <?php print $registered_email; ?>
    </div>
    <div class="your-pass">
       <?php print drupal_render($form['create_password']); ?>
    </div>
    <div class="your-con-pass">
       <?php print drupal_render($form['confirm_password']); ?>
    </div>
    <div class="your-button">
       <?php print drupal_render($form['submit']); ?>
    </div>
</div>
