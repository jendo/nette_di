<?php

namespace MyApp\Mailer;

/**
 * Interface MailFactory
 *
 * Factory generated from an interface via Nette/di
 * The interface must have the only one method named create and must declare the returning type in the '@return' annotation
 *
 */
interface MailFactory
{
    /**
     * @return Mail
     */
    public function create();
}
