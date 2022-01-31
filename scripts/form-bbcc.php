<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Registered ',
    'email_message' => 'Thank you for registering on Landwhales',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'https:&#x2F;&#x2F;vandilier.github.io&#x2F;Landwhales.ca.org',
    'to' => 'https:&#x2F;&#x2F;mail.google.com&#x2F;mail&#x2F;u&#x2F;0&#x2F;#inbox'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'USERNAME',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'USERNAME\' is required.'
    )
    ),
    'email' => array(
    'order' => 2,
    'type' => 'email',
    'label' => 'EMAIL',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'EMAIL\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>