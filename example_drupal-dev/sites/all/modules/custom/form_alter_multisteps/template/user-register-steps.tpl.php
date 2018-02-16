<?php



  // Always print out the entire $form. This renders the remaining pieces of the
  // form that haven't yet been rendered above (buttons, hidden elements, etc).
  print drupal_render_children($form);
