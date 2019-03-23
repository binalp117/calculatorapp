<?php
namespace Binal;

use Binal\CalculatorInterface;

Class CalculatorApp
{	
	protected $operand1;
	protected $operand2;
	protected $calculator;
	protected $operationName;

	public function __construct(CalculatorInterface $calculator)
	{
		$this->calculator = $calculator;
	}

	protected function setOperands($operand1, $operand2)
	{
		$this->operand1 = $operand1;
		$this->operand2 = $operand2;
	}

	// Function to process the given input into operands and set the operands
	public function processOperands($input = '')
	{
		$number1 = 0;
		$number2 = 0;
		if($input != "") {
			if(strpos($input, ',')) {
				$input = str_replace('\n', ',', $input);
			}
			$numbers = explode(',', $input);		

			if(sizeof($numbers) > 0) {
				$number1 = intval($numbers[0]);

				if(sizeof($numbers) > 1) {
					for($kkk = 1; $kkk < sizeof($numbers); $kkk++) {
						$number2 += intval($numbers[$kkk]);
					}
				}
			}
		}	

		$this->setOperands($number1, $number2);
	}

	// Function to set the name of operation
	public function setOperation($operationName)
	{
		$this->operationName = $operationName;
	}

	// Function to process the calculation
    public function process()
    {	
    	$result = 0;
		switch ($this->operationName) {
			case 'sum':
				$result = $this->calculator->add($this->operand1, $this->operand2);
				break;

			case 'add':
				$result = $this->calculator->add($this->operand1, $this->operand2);
				break;

			case 'substract':
				$result = $this->calculator->substract($this->operand1, $this->operand2);
				break;

			case 'muliply':
				$result = $this->calculator->multiply($this->operand1, $this->operand2);
				break;

			case 'divide':
				$result = $this->calculator->divide($this->operand1, $this->operand2);
				break;
			
			default:
				$result = $this->calculator->add($this->operand1, $this->operand2);
				break;
		}	

		return $result;
	}
}
?>