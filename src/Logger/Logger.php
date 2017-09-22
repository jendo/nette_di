<?php

namespace MyApp\Logger;

/**
 * Interface Logger
 *
 * Used for autowiring of service which implements this interface
 */
interface Logger
{
    function log($message);
}
