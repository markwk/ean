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

  return $form;
}

function ean_settings_test_validate($form, &$form_state) {
  if (!preg_match('/^[0-9]+$/', $form_state['values']['ean_hotel_id'])) {
    form_set_error('ean_hotel_id', t('That is not a valid EAN id'));
  }
}

function ean_settings_test_submit($form, &$form_state) {
  $params = array(
    'hotelId' => $form_state['values']['ean_hotel_id'],
    'options' => 'DEFAULT', //HOTEL_DETAILS,PROPERTY_AMENITIES,HOTEL_IMAGES',
  );
  $data = ean_http_request('info', $params);

  dsm($data);
}
