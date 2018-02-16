<?php

/**
 * @file
 * Implementation of THEME_settings() function.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */
function campusmate_form_system_theme_settings_alter(&$form, &$form_state) {

  $form['campusmate_theme_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('The One Page Theme Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['campusmate_theme_settings']['homebanner'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front Page Home banner'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['campusmate_settings']['homebanner']['banner'] = array(
    '#markup' => t('You can change the description and URL of banner in the following Banner Setting fieldsets.'),
  );
  $form['campusmate_theme_settings']['homebanner']['banner']['banner_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Banner Headline'),
    '#default_value' => theme_get_setting('banner_head', 'campusmate'),
  );
  $form['campusmate_theme_settings']['homebanner']['banner']['banner_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Banner Description'),
    '#default_value' => theme_get_setting('banner_desc', 'campusmate'),
  );
  $form['campusmate_theme_settings']['homebanner']['banner']['banner_label'] = array(
    '#type' => 'textfield',
    '#title' => t('Button Label'),
    '#default_value' => theme_get_setting('banner_label', 'campusmate'),
  );
  $form['campusmate_theme_settings']['homebanner']['banner']['banner_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Button URL'),
    '#default_value' => theme_get_setting('banner_url', 'campusmate'),
  );

  $form['campusmate_theme_settings']['how_it_work'] = array(
    '#type' => 'fieldset',
    '#title' => t('How it work'),
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );
  $form['campusmate_theme_settings']['how_it_work']['work_title'] = array(
    '#type' => 'textfield',
    '#title' => t('Title'),
    '#default_value' => theme_get_setting('work_title', 'campusmate'),
  );
  $form['campusmate_theme_settings']['how_it_work']['how_it_work_1'] = array(
    '#type' => 'fieldset',
    '#title' => t('How it work one'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['campusmate_theme_settings']['how_it_work']['how_it_work_1']['work_title_1'] = array(
    '#type' => 'textfield',
    '#title' => t('Title'),
    '#default_value' => theme_get_setting('work_title_1', 'campusmate'),
  );
  $form['campusmate_theme_settings']['how_it_work']['how_it_work_1']['work_desc_1'] = array(
    '#type' => 'textarea',
    '#title' => t('Description'),
    '#default_value' => theme_get_setting('work_desc_1', 'campusmate'),
  );

  $form['campusmate_theme_settings']['how_it_work']['how_it_work_2'] = array(
    '#type' => 'fieldset',
    '#title' => t('How it work two'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['campusmate_theme_settings']['how_it_work']['how_it_work_2']['work_title_2'] = array(
    '#type' => 'textfield',
    '#title' => t('Title'),
    '#default_value' => theme_get_setting('work_title_2', 'campusmate'),
  );
  $form['campusmate_theme_settings']['how_it_work']['how_it_work_2']['work_desc_2'] = array(
    '#type' => 'textarea',
    '#title' => t('Description'),
    '#default_value' => theme_get_setting('work_desc_2', 'campusmate'),
  );

  $form['campusmate_theme_settings']['how_it_work']['how_it_work_3'] = array(
    '#type' => 'fieldset',
    '#title' => t('How it work three'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['campusmate_theme_settings']['how_it_work']['how_it_work_3']['work_title_3'] = array(
    '#type' => 'textfield',
    '#title' => t('Title'),
    '#default_value' => theme_get_setting('work_title_3', 'campusmate'),
  );
  $form['campusmate_theme_settings']['how_it_work']['how_it_work_3']['work_desc_3'] = array(
    '#type' => 'textarea',
    '#title' => t('Description'),
    '#default_value' => theme_get_setting('work_desc_3', 'campusmate'),
  );
kpr($form);
}
