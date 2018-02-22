<?php
use PHPUnit\Framework\TestCase;

/**
 * Class MailerTest
 */

class MailerTest extends TestCase
{

    private $mailer;

    /**
     * MailerTest constructor.
     */
    public function __construct()
    {
        parent::__construct();

        include "Logger.php";
        include "Mailer.php";

        $this->mailer = new Mailer();
    }

    /**
     * Test class to send email
     */
    public function testSender()
    {
        try
        {
            $this->mailer->to = 'test@urancompany.com';
            $this->mailer->send();
        } catch (Exception $e)
        {
            $this->fail('Raise an exception ' . $e->getMessage());
        }
    }

}
