<?php

namespace MyApp\Logger;

use Nette\DI\Container;

/**
 * Class FileLogger
 *
 * Service of type Logger, registered in config for Nette/DI container => autowired injected via Interface name
 */
final class FileLogger implements Logger
{
    /**
     * @var string
     */
    private $file;

    /**
     * @var Container
     */
    private $container;

    /**
     * FileLogger constructor.
     * @param string $file
     * @param Container $container
     */
    public function __construct($file, Container $container)
    {
        $this->file = $file;
        $this->container = $container;
    }

    public function log($message)
    {
        file_put_contents($this->file, $message . "\n", FILE_APPEND);
    }
}
