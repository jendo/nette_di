<?php

namespace MyApp\Mailer;

/**
 * Class SendMailMailer
 *
 * Service SendMailMailer of type Mailer to send emails
 */
final class SendMailMailer implements Mailer
{
    /**
     * @param Mail $mail
     * @param string $to
     * @return bool
     */
    function send(Mail $mail, $to)
    {
        return mail($to, $mail->getSubject(), $mail->getMessage());
    }
}
