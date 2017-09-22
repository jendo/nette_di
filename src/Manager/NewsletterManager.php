<?php

namespace MyApp\Manager;

use MyApp\Logger\Logger;
use MyApp\Mailer\Mailer;
use MyApp\Mailer\MailFactory;

class NewsletterManager
{
    /**
     * @var Mailer
     */
    private $mailer;
    /**
     * @var Logger
     */
    private $logger;
    /**
     * @var MailFactory
     */
    private $mailFactory;

    /**
     * @param Mailer $mailer
     * @param Logger $logger
     * @param MailFactory $mailFactory
     */
    public function __construct(Mailer $mailer, Logger $logger, MailFactory $mailFactory)
    {
        $this->mailer = $mailer;
        $this->logger = $logger;
        $this->mailFactory = $mailFactory;
    }

    /**
     * @param string $recipient
     * @return bool
     */
    function distribute(string $recipient)
    {
        $mail = $this->mailFactory->create();
        $mail->setMessage('Message');
        $mail->setSubject('Subject');

        $mailSent = $this->mailer->send($mail, $recipient);

        $this->logger->log('Mail sent: ' . (int) $mailSent);
    }
}
