<?php

require_once 'Business.php';

// Form validation
if (!empty($_POST)) {
    $submit = $_POST['submit'];

    if ($submit) {
        $result = 'Form submitted';

        if (!$_POST['businessName']){
            $error .= '<br />Please enter a valid business name';
        }

        if (!$_POST['Location']){
            $error .= '<br />Please enter a valid location';
        }

        if (!$_POST['amount']){
            $error .= '<br />Please enter a valid amount billed';
        }

        if ($error){
            $result = '<strong>There were error(s) in your form:</strong>' . $error;
        }
    }
}