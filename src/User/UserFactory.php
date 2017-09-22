<?php

namespace MyApp\User;

/**
 * Class UserFactory
 *
 * Explicit creation of User object without using Nette/DI container
 *
 */
class UserFactory
{
    /**
     * @param string $name
     * @return User
     */
    public function create(string $name)
    {
        return new User($name);
    }
}
