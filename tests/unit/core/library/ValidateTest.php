<?php

namespace tests\unit\core\library;

use core\library\Validate;
use PHPUnit\Framework\TestCase;

class ValidateTest extends TestCase
{
    public function testValidateRequired()
    {
        // Arrange
        $validate = new Validate();

        // Act
        $validated = $validate->required();

        // Assert
        $this->assertTrue($validated);
    }

    public function testValidateEmail()
    {
        // Arrange
        $validate = new Validate();
        $validated = $validate->email();

        // Act
        $validated = $validate->email();

        // Assert
        $this->assertTrue($validated);
    }
}
