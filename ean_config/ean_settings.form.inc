<?php

/**
 * @file
 * This file just builds the EAN settings form.
 */

/**
 * Builds the settings form.
 */
function ean_config_settings_form($form, &$form_state) {
  $form['ean_config_cid'] = array(
    '#type' => 'textfield',
    '#title' => 'CID',
    '#description' => t('The client id that you were given upon application'),
    '#default_value' => variable_get('ean_config_cid'),
  );

  $form['ean_config_key'] = array(
    '#type' => 'textfield',
    '#title' => 'Key',
    '#description' => t('An EAN API key, there might be more API keys associated with your account, but you only need to enter one here'),
    '#default_value' => variable_get('ean_config_key'),
  );

  return system_settings_form($form);
}
