<?php

namespace Dojo\Tests;

use Dojo\Calculator;

class CalculatorTest extends \PHPUnit_Framework_TestCase
{
    public function testDisplaysZeroWhenEnteringZero()
    {
        // Arrange
        $this->calculator = new Calculator();

        // Act
        $this->calculator->enter('0');

        // Assert
        $expected = '0';
        $actual = $this->calculator->display();
        $this->assertEquals($expected, $actual);
    }

    public function testAddition()
    {
        $this->calculator = new Calculator();
        $this->calculator->add(10);

        $expected = 10;
        $actual = $this->calculator->display();
        $this->assertEquals($expected, $actual);
    }
}
