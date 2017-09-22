<?php

namespace MyApp\Mailer;

/**
 * Interface Mailer
 *
 * Used for autowiring of service which implements this interface
 */
interface Mailer
{
    /**
     * @param Mail $mail
     * @param $to
     * @return bool
     */
    function send(Mail $mail, $to);
}
