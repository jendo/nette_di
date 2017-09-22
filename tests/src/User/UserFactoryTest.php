<?php

namespace MyApp\User;

use PHPUnit\Framework\TestCase;

class UserFactoryTest extends TestCase
{
    public function testCreate()
    {
        $userFactory = new UserFactory();
        $user = $userFactory->create('John Doe');

        $this->assertInstanceOf(User::class, $user);
    }
}
