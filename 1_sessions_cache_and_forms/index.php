<?php

    session_start();
    unset($_SESSION['error'], $_SESSION['success']);
    $_SESSION['fails'] = [];

    // Time to retry (in seconds)
    $interval = 30*60;

    // Set cache dir
    $cacheDir = 'cache';

    // Get user message
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Delete old cache files
    if ($dir = opendir($cacheDir))
    {
        while (($file = readdir($dir)) !== false)
        {
            if ($file != '.' && $file != '..' && time() - filemtime($cacheDir . '/' . $file ) > $interval)
            {
                try{
                    unlink($cacheDir . '/' . $file);
                } catch (Exception $e) {
                    $_SESSION['fails'][] = $e->getMessage();
                }
            }
        }
    }


    if (!empty($message))
    {
        // Cache file for this message
        $cacheFile = $cacheDir . '/' . md5($message);
        $cacheFileTime = file_exists($cacheFile) ? filemtime($cacheFile) : 0;

        if (isset($_SESSION['sendTime']) && time() - $_SESSION['sendTime'] < $interval)
        // If the user is still not allowed to send a message
        {
            $nextTime = round(($interval - (time() - $_SESSION['sendTime'])) / 60);
            $_SESSION['error'] = 'Вы уже отправили запрос, повторный запрос можно отправить через ' . $nextTime . ' минут(ы).';
        } elseif (time() - $cacheFileTime < $interval)
        // If this message was sent earlier
        {
            $nextTime = round(($interval - (time() - $cacheFileTime)) / 60);
            $_SESSION['error'] = 'Данное сообщение уже был отправлен ранее. Повторный запрос можно отправить через ' . $nextTime . ' минут(ы).';
        } else
        // All is well, we can send a message
        {
            try
            {
                touch($cacheFile);
            } catch (Exception $e)
            {
                $_SESSION['fails'][] = $e->getMessage();
            }
            $_SESSION['success'] = 'Ваше сообщение успешно отправлено.';
            $_SESSION['sendTime'] = time();
        }
    }

    require "template.tpl";