<?php

namespace MyApp\User;

/**
 * Class User
 *
 * User entity created by UserFactory
 */
class User
{
    /**
     * @var string
     */
    private $name;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}
