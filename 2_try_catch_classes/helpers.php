<?php

spl_autoload_register(
    function ($class)
    {
        include $class . '.php';
    }
);



// Set custom error handler function
function customErrorHandler($errno, $errstr, $errfile, $errline)
{
    $logger = new Logger();
    switch ($errno)
    {
        case E_ERROR:
        case E_USER_ERROR:
        case E_CORE_ERROR:
            $logger->error($errstr);
            break;
        case E_WARNING:
        case E_USER_WARNING:
        case E_CORE_WARNING:
            $logger->warning($errstr);
            break;
        default:
            $logger->info($errstr);
            break;
    }
}

$error_handler = set_error_handler("customErrorHandler");
