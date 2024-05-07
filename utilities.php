<?php

function controlEmail($mail) {

    $email_control = false;
    
    if (str_contains($mail, '.') && str_contains($mail, '@')) {
        $email_control = true;
    } else {
        $email_control = false;
    }

    return $email_control;
}

