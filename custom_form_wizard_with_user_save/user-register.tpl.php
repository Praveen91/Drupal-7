<?php

krumo($form);
unset($form['actions']);
unset($form['#submit']);
hide($form['account']);
hide($form['profile_student_registration']);

print render($form['account']['name']);
print render($form['account']['mail']);

//print render($form['profile_student_registration']['field_user_profile']);

//print drupal_render($form['actions']);
  print drupal_render_children($form);
