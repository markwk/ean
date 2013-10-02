<?php

/**
 * @file
 * This file just builds the EAN settings form.
 */

/**
 * Builds the settings form.
 */
function ean_settings_form($form, &$form_state) {
  $form['ean_cid'] = array(
    '#type' => 'textfield',
    '#title' => 'CID',
    '#description' => t('The client id that you were given upon application'),
    '#default_value' => variable_get('ean_cid'),
  );

  $form['ean_key'] = array(
    '#type' => 'textfield',
    '#title' => 'Key',
    '#description' => t('An EAN API key, there might be more API keys associated with your account, but you only need to enter one here'),
    '#default_value' => variable_get('ean_key'),
  );

  return system_settings_form($form);
}

/**
 * Builds the setting test form.
 */
function ean_settings_test($form, &$form_state) {
  $form = array();

  $form['ean_hotel_id'] = array(
    '#type' => 'textfield',
    '#title' => t('EAN Hotel ID'),
    '#description' => t(''),
    '#required' => TRUE,
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Look up hotel'),
  );

  if (isset($form_state['ean_hotel'])) {
    // The result was posted, so display a pretty form and the raw data.
    $form['ean_hotel'] = array(
      '#type' => 'fieldset',
      '#title' => t('Result'),
      '#collapsible' => FALSE,
    );

    // Print the pretty form.
    $form['ean_hotel'] = array(
      '#markup' => theme(
        'ean_hotel',
        array(
          'hotel' => $form_state['ean_hotel'],
        )
      ),
      '#weight' => 5,
    );

    // Make the fieldset that contains the raw data.
    $form['ean_hotel']['details'] = array(
      '#type' => 'fieldset',
      '#title' => t('Details'),
      '#collapsible' => TRUE,
      '#collapsed' => TRUE,
      '#weight' => 10,
    );

    $form['ean_hotel']['details']['data'] = array(
      '#markup' => '<pre><small>'
      . print_r($form_state['ean_hotel'], TRUE)
      . '</small></pre>',
    );
  }

  return $form;
}

/**
 * Validates the test form.
 */
function ean_settings_test_validate($form, &$form_state) {
  if (!preg_match('/^[0-9]+$/', $form_state['values']['ean_hotel_id'])) {
    form_set_error('ean_hotel_id', t('That is not a valid EAN id'));
  }
}

/**
 * Submits the test form.
 */
function ean_settings_test_submit($form, &$form_state) {
  $data = ean_hotel_info($form_state['values']['ean_hotel_id']);

  $form_state['ean_hotel'] = $data;

  $form_state['rebuild'] = TRUE;
}
