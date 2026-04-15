<?php

namespace tests\unit\core\library;

use core\library\Validate;
use PHPUnit\Framework\TestCase;

class ValidateTest extends TestCase
{
    public function testValidateRequired()
    {
        $validate = new Validate();
        $validated = $validate->required();

        $this->assertTrue($validated);
    }
}
