<?php

krumo($form);


print render($form['user_profile']);

print render($form['next']);




print drupal_render($form['actions']);
  print drupal_render_children($form);
