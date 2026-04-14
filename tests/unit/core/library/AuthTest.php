<?php

namespace tests\core\library;

use core\library\Auth;
use PHPUnit\Framework\TestCase;
class AuthTest extends TestCase
{
    public function testLogin()
    {
        $auth = new Auth();
        $result = $auth->attempt();

        $this->assertTrue($result);
    }
}
