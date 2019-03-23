<?php
// Command : vendor/bin/phpunit TestCases/SubstractTest.php
require __DIR__.'/../boostapp.php';

use PHPUnit\Framework\TestCase;
use Binal\CalculatorApp;
use Binal\CalculatorImplementation;

class SubstractTest extends TestCase
{
    public function testAddtionOfTwoNumbers()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('5,6');
        $calc->setOperation('substract');
        $this->assertEquals($calc->process(), -1);
    }

    public function testAddtionOfOneNumber()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('1');
        $calc->setOperation('substract');
        $this->assertEquals($calc->process(), 1);
    }

    public function testAddtionOfNoNumber()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands();
        $calc->setOperation('substract');
        $this->assertEquals($calc->process(), 0);
    }
}
?>