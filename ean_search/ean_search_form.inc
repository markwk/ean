<?php
/**
 * @file
 * This file actually has the code that builds the form.
 */

/**
 */
function ean_search_block($form, &$form_state) {
  $form = array();

  $form['destination'] = array(
    '#type' => 'textfield',
    '#title' => t('Destination'),
    '#value' => 'Lima, Peru',
  );

  $form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Search'),
  );

  return $form;
}

/**
 * Validates the user's input.
 */
function ean_search_block_validate($form, &$form_state) {
  $destination = $form_state['input']['destination'];
  if (!$destination) {
    form_set_error('destination', t('Please enter somewhere you want to stay'));
  }
}

/**
 * Submits the user's input.
 */
function ean_search_block_submit($form, &$form_state) {
  $destination = $form_state['input']['destination'];
  drupal_set_message(
    t(
      'Searching for @destination', 
      array(
        '@destination' => $destination,
      )
    )
  );

  //$hotelList = ean_region($destination);
}
