<?php

/**
 * Returns the list of steps and their associated forms.
 */
function _campusmate_signup_steps() {
  return array(
    1 => array(
      'form' => 'campusmate_signup_wizard_select_profile',
    ),
    2 => array(
      'form' => 'campusmate_signup_wizard_personal_info',
    ),
    3 => array(
      'form' => 'campusmate_signup_wizard_subject_info',
    ),
  );
}

/**
 * The primary formbuilder function for the wizard form.
 */
function campusmate_signup_wizard($form, &$form_state) {
// Initialize a description of the steps for the wizard.
  if (empty($form_state['step'])) {
    $form_state['step'] = 1;
    $form_state['step_information'] = _campusmate_signup_steps();
  }
  $step = &$form_state['step'];
  drupal_set_title(t('Sign Up 1/@step', array('@step' => $step)));

  // Call the function named in $form_state['step_information'] to get the
  // form elements to display for this step.
  $form = $form_state['step_information'][$step]['form']($form, $form_state);

  if ($step > 1) {
    $form['prev'] = array(
      '#type' => 'submit',
      '#value' => t('Back'),
      '#name' => 'prev',
      '#submit' => array('campusmate_signup_wizard_previous_submit'),
      '#limit_validation_errors' => array(),
    );
  }
// Show the Next button only if there are more steps defined.
  if ($step < count($form_state['step_information'])) {
    // The Next button should be included on every step.
    $form['next'] = array(
      '#type' => 'submit',
      '#value' => t('Next'),
      '#name' => 'next',
      '#submit' => array('campusmate_signup_wizard_next_submit'),
    );
  }
  else {
    // Just in case there are no more steps, we use the default submit handler
    // of the form wizard. Call this button Finish, Submit, or whatever you
    // want to show. When this button is clicked, the
    // form_example_wizard_submit handler will be called.
    $form['finish'] = array(
      '#type' => 'submit',
      '#value' => t('Finish'),
    );
  }

  // Include each validation function defined for the different steps.
  if (function_exists($form_state['step_information'][$step]['form'] . '_validate')) {
    $form['next']['#validate'] = array($form_state['step_information'][$step]['form'] . '_validate');
  }

  return $form;
}

/**
 * Submit handler for the "previous" button.
 *
 * This function:
 * - Stores away $form_state['values']
 * - Decrements the step counter
 * - Replaces $form_state['values'] with the values from the previous state.
 * - Forces form rebuild.
 *
 * You are not required to change this function.
 *
 * @ingroup form_example
 */
function campusmate_signup_wizard_previous_submit($form, &$form_state) {
  $current_step = &$form_state['step'];
  $form_state['step_information'][$current_step]['stored_values'] = $form_state['input'];
  if ($current_step > 1) {
    $current_step--;
    $form_state['values'] = $form_state['step_information'][$current_step]['stored_values'];
  }
  $form_state['rebuild'] = TRUE;
}


/**
 * Submit handler for the 'next' button.
 *
 * This function:
 * - Saves away $form_state['values']
 * - Increments the step count.
 * - Replace $form_state['values'] from the last time we were at this page
 *   or with array() if we haven't been here before.
 * - Force form rebuild.
 *
 * You are not required to change this function.
 *
 * @ingroup form_example
 */
function campusmate_signup_wizard_next_submit($form, &$form_state) {
  $current_step = &$form_state['step'];
  $form_state['step_information'][$current_step]['stored_values'] = $form_state['values'];

  if ($current_step < count($form_state['step_information'])) {
    $current_step++;
    if (!empty($form_state['step_information'][$current_step]['stored_values'])) {
      $form_state['values'] = $form_state['step_information'][$current_step]['stored_values'];
    }
    else {
      $form_state['values'] = array();
    }
    // Force rebuild with next step.
    $form_state['rebuild'] = TRUE;
    return;
  }
}


/**
 * Returns form elements for the 'Select Profile info' page of the wizard.
 *
 * This is the first step of the wizard, asking for select field
 *
 * @ingroup form_example
 */
function campusmate_signup_wizard_select_profile($form, &$form_state) {
  $form = array();
  $form['user_profile'] = array(
    '#type' => 'select',
    '#title' => t('Select your user profile'),
    '#options' => [
      'student' => t('Student'),
      'tutor' => t('Tutor')
    ],
    '#required' => TRUE,
  );
  return $form;
}

/**
 * Returns form elements for the 'personal info' page of the wizard.
 */
function campusmate_signup_wizard_personal_info($form, &$form_state) {
 $form = [];
 $form['fullname'] = [
  '#type' => 'textfield',
  '#title' => t('Full Name'),
  '#default_value' => !empty($form_state['values']['fullname']) ? $form_state['values']['fullname'] : '',
 ];

 $form['email'] = [
  '#type' => 'textfield',
  '#title' => t('Email'),
  '#default_value' => !empty($form_state['values']['email']) ? $form_state['values']['email'] : '',
 ];
 return $form;
}

/**
 * Returns form elements for the 'personal info' page of the wizard.
 */
function campusmate_signup_wizard_subject_info($form, &$form_state) {
 $form = [];
 $form['subname'] = [
  '#type' => 'textfield',
  '#title' => t('Subject Name'),
  '#required' => TRUE,
  '#description' => t('Hint: Do not enter "Math", and do not leave this out.'),
  '#default_value' => !empty($form_state['values']['subname']) ? $form_state['values']['subname'] : '',
 ];
 return $form;
}


/**
 * Custom validation form for the 'location info' page of the wizard.
 *
 * This is the validation function for the second step of the wizard.
 * The city cannot be empty or be "San Francisco".
 *
 * @ingroup form_example
 */
function campusmate_signup_wizard_subject_info_validate($form, &$form_state) {
  if ($form_state['values']['subname'] == 'Math') {
    form_set_error('subname', t('You were warned not to enter "Math"'));
  }
}



/**
 * Wizard form submit handler.
 *
 * This function:
 * - Saves away $form_state['values']
 * - Process all the form values.
 *
 * And now comes the magic of the wizard, the function that should handle all
 * the inputs from the user on each different step.
 *
 * This demonstration handler just do a drupal_set_message() with the
 * information collected on each different step of the wizard.
 *
 * @ingroup form_example
 */
function campusmate_signup_wizard_submit($form, &$form_state) {
  $current_step = &$form_state['step'];
  $form_state['step_information'][$current_step]['stored_values'] = $form_state['values'];

  // In this case we've completed the final page of the wizard, so process the
  // submitted information.
  drupal_set_message(t('This information was collected by this wizard:'));
  foreach ($form_state['step_information'] as $index => $value) {
    // Remove FAPI fields included in the values (form_token, form_id and
    // form_build_id. This is not required, you may access the values using
    // $value['stored_values'] but I'm removing them to make a more clear
    // representation of the collected information as the complete array will
    // be passed through drupal_set_message().
    unset($value['stored_values']['form_id']);
    unset($value['stored_values']['form_build_id']);
    unset($value['stored_values']['form_token']);

    // Now show all the values.
    drupal_set_message(t('Step @num collected the following values: <pre>@result</pre>',
      array(
        '@num' => $index,
        '@result' => print_r($value['stored_values'], TRUE),
      )
    ));
  }
}
