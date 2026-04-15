<?php

namespace tests\core\library;

use core\library\Auth;
use PHPUnit\Framework\TestCase;
class AuthTest extends TestCase
{
    private Auth $auth;

    public function setUp(): void
    {
        $this->auth = new Auth();
    }
    public function testAttemptLogin()
    {
       // Act
       $loggedIn = $this->auth->attempt();

       // Assert
       $this->assertTrue($loggedIn);
       $this->assertEquals('Luis' , 'Luis');
    }

    public function testLogout()
    {
        // Act
        $loggedOut = $this->auth->attempt();

        // Assert
        $this->assertTrue(true);
    }

    public function tearDown(): void
    {
        echo 'Rodou teardown';
    }
}
