<!-- //dpm($variables); -->

<div class="form-one">
    <div class="your-email">
       <?php print drupal_render($form['login_email']); ?>
    </div>
    <div class="your-pass">
       <?php print drupal_render($form['login_password']); ?>
    </div>
    <div class="your-button">
       <?php print drupal_render($form['login_submit']); ?>
    </div>
</div>
