<div class="jumbotron">
  <h2><i class="glyphicon glyphicon-user"></i> Personal Information</h2>
  <div class="row">
    <div class="col-xs-12 col-md-6"><?php print drupal_render($form['submitted']['first_name']); ?></div>
    <div class="col-xs-12 col-md-6"><?php print drupal_render($form['submitted']['last_name']); ?></div>
  </div>
</div>

<div class="row form-group">
  <div class="col-xs-12 col-md-6"><?php print drupal_render($form['submitted']['email']); ?></div>
  <div class="col-xs-12 col-md-6"><?php print drupal_render($form['submitted']['telephone']); ?></div>
</div>

<div class="row form-group">
  <div class="col-xs-12"><?php print drupal_render($form['submitted']['reason_for_contact']); ?></div>
</div>

<div class="row form-group">
  <div class="col-xs-12"><?php print drupal_render($form['submitted']['message']); ?></div>
</div>

<?php
  // Print out the main part of the form.
  // Feel free to break this up and move the pieces within the array.
  print drupal_render($form['submitted']);

  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above (buttons, hidden elements, etc).
  print drupal_render_children($form);
