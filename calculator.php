<?php
// Command : php calculator.php add "1,2"
require __DIR__.'/boostapp.php';

use Binal\CalculatorApp;
use Binal\CalculatorImplementation;

$processName = 'add';
if(isset($argv[1]) && trim($argv[1]) != '') {
    $processName = $argv[1];
}

$data = "";
if(isset($argv[2]) && trim($argv[2]) != '') {
    $data = $argv[2];
}

$calculator = new CalculatorApp(new CalculatorImplementation);
$calculator->processOperands($data);
$calculator->setOperation('sum');
$result = $calculator->process();

echo $result."\n";
exit(0);
?>