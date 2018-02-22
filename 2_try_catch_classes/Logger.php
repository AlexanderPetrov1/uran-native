<?php

/**
 * Class Logger
 */
class Logger
{

    /**
     * Dir for the logs and lost emails
     *
     * @var string
     */
    private $logDir = 'logger';

    /**
     * File for the logs
     *
     * @var string
     */
    private $logFile = 'logs.txt';

    /**
     * File for the lost emails
     *
     * @var string
     */
    private $emailFile = 'emails.txt';


    /**
     * Logger constructor.
     * Also trying to create Log File and file for Lost Emails
     */
    public function __construct()
    {
        umask(0);
        if (!is_dir($this->logDir))
        {
            mkdir($this->logDir, 0777);
        }
        touch($this->logDir . '/' . $this->logFile);
        touch($this->logDir . '/' . $this->emailFile);
    }

    /**
     * Log the lost email
     *
     * @param $message string
     */
    public function email($message)
    {
        $this->write('EMAIL', $this->emailFile, $message);
    }

    /**
     * Log the warning string
     *
     * @param $warning string
     */
    public function warning($warning)
    {
        $this->write('WARNING', $this->logFile, $warning);
    }

    /**
     * Log the error string
     *
     * @param $error string
     */
    public function error($error)
    {
        $this->write('ERROR', $this->logFile, $error);
    }

    /**
     * Log the info string
     *
     * @param $info string
     */
    public function info($info)
    {
        $this->write('INFO', $this->logFile, $info);
    }

    /**
     * Try to write line to the log file
     *
     * @param $type         string
     * @param $filename     string
     * @param $message      string
     * @throws Exception
     */
    private function write($type, $filename, $message)
    {
        $filename = $this->logDir . '/' . $filename;
        if (is_writeable($filename))
        {
            $handle = fopen($filename, 'a');
            fwrite($handle, date('d.m.Y H:i:s') . " {$type}: {$message}" . PHP_EOL);
            fclose($handle);
        } else
        {
            throw new Exception("File {$filename} is not writeable");
        }
    }


}