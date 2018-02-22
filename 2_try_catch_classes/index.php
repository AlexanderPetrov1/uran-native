<?php

    include "helpers.php";

    $mailer = new Mailer();

    // Set destination Email address
    $mailer->setTo('test@add.com');

    // Set Email subject
    $mailer->setSubject('Email subject');

    // Set Email message
    $mailer->setMessage('Email message');

    // Try to send Email
    try
    {
        $mailer->send();
    } catch (Exception $e)
    {
        echo $e->getMessage();
    }
