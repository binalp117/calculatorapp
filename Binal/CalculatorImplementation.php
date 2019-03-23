<?php
namespace Binal;

use Binal\CalculatorInterface;

Class CalculatorImplementation implements CalculatorInterface 
{
    public function add($operand1, $operand2) 
    {
        return $operand1+$operand2;
    }

    public function substract($operand1, $operand2) 
    {
        return $operand1-$operand2;
    }

    public function multiply($operand1, $operand2) 
    {
        return $operand1*$operand2;
    }

    public function divide($operand1, $operand2) 
    {
        return $operand1/$operand2;
    }
}
?>