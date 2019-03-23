<?php
// Command : vendor/bin/phpunit TestCases/AdditionTest.php
require __DIR__.'/../boostapp.php';

use PHPUnit\Framework\TestCase;
use Binal\CalculatorApp;
use Binal\CalculatorImplementation;

class AdditionTest extends TestCase
{
    public function testAddtionOfTwoNumbers()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('5,6');
        $calc->setOperation('sum');
        $this->assertEquals($calc->process(), 11);
    }

    public function testAddtionOfOneNumber()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('1');
        $calc->setOperation('sum');
        $this->assertEquals($calc->process(), 1);
    }

    public function testAddtionOfNoNumber()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands();
        $calc->setOperation('sum');
        $this->assertEquals($calc->process(), 0);
    }
}
?>