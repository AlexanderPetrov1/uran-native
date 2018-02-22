<?php

/**
 * Class Mailer
 */
class Mailer extends Logger
{
    private $logger;

    /**
     * The TO email of the message.
     *
     * @var string
     */
    public $to = null;

    /**
     * The Subject of the message.
     *
     * @var string
     */
    public $subject = null;

    /**
     * The Email message.
     *
     * @var string
     */
    public $message = null;


    /**
     * Constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->logger = new Logger();
    }

    /**
     * Set TO email of the message.
     *
     * @param $to strubg
     */
    public function setTo($to)
    {
        $this->to = $to;
    }

    /**
     * Set Subject of the message.
     *
     * @param $subject string
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * Set message of the email
     *
     * @param $message string
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }


    /**
     * Check TO email
     * Try to send email
     * Clear params on success
     *
     * @return bool
     * @throws Exception
     */
    public function send()
    {
        if (!filter_var($this->to, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception('Email TO is incorrect');
        }

        if (!mail($this->to, $this->subject, $this->message))
        {
            $this->logger->email("TO: {$this->to}, SUBJECT: {$this->subject}, MESSAGE: {$this->message}");
            throw new Exception('Email is not sended. See log file for details');
        }

        $this->clear();
        return true;
    }

    /**
     * Clear params
     */
    public function clear()
    {
        $this->to = null;
        $this->subject = null;
        $this->message = null;
    }

}