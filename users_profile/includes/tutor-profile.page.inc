<?php

/**
 * Implement hook_form().
 * Tutor update info.
 */
function tutor_update_info_form($form, &$form_state) {

  $logo_url = theme_get_setting('logo_path');
  $site_logo = theme('image', array(
  'path' => $logo_url,
  'alt' => 'CampusMate Logo',
  'title' => 'CampusMate Logo',
  'width' => '200px',
  ));

  $form['campusmate_logo'] = [
    '#type' => 'markup',
    '#prefix' => '<div class="mt64 mb64">',
    '#markup' => $site_logo,
    '#suffix' => '</div>',
  ];

  return $form;
}
