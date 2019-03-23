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

    public function testAdditionOfThreeNumbers()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('4,5,6');
        $calc->setOperation('add');
        $this->assertEquals($calc->process(), 15);
    }

    public function testAdditionOfFourNumbers()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('2,3,4,5');
        $calc->setOperation('add');
        $this->assertEquals($calc->process(), 14);
    }

    public function testAdditionOfMoreNumbers()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('4,7,3,4,7,3,5,6,7,4,3,2,5,7,5,3,4,6,7,8,9,5,5,5,4,3,2');
        $calc->setOperation('add');
        $this->assertEquals($calc->process(), 133);
    }

    public function testAdditionOfNumbersWithBreakline()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('2\n3,4');
        $calc->setOperation('add');
        $this->assertEquals($calc->process(), 9);
    }

    public function testAdditionOfNumbersWithBreaklineMore()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('2\n3,4,5\n8');
        $calc->setOperation('add');
        $this->assertEquals($calc->process(), 22);
    }

    public function testAdditionOfNumbersWithDelimiters()
    {
        $calc = new CalculatorApp(new CalculatorImplementation);
        $calc->processOperands('\\;\\3;4;5');
        $calc->setOperation('add');
        $this->assertEquals($calc->process(), 12);
    }
}
?>