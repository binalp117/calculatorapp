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

    public function testAdditionOfThreeNumbers()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('4,5,6');
        $calc->setOperation('substract');
        $this->assertEquals($calc->process(), -7);
    }

    public function testAdditionOfFourNumbers()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('2,3,4,5');
        $calc->setOperation('substract');
        $this->assertEquals($calc->process(), -10);
    }

    public function testAdditionOfMoreNumbers()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('4,7,3,4,7,3,5,6,7,4,3,2,5,7,5,3,4,6,7,8,9,5,5,5,4,3,2');
        $calc->setOperation('substract');
        $this->assertEquals($calc->process(), -125);
    }
}
?>