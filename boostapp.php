<?php
$mapping = array(
    'Binal\CalculatorInterface' => __DIR__.'/Binal/CalculatorInterface.php',
    'Binal\CalculatorImplementation' => __DIR__.'/Binal/CalculatorImplementation.php',
    'Binal\CalculatorApp' => __DIR__.'/Binal/CalculatorApp.php'
);

spl_autoload_register(function ($class) use ($mapping) {
    if (isset($mapping[$class])) {
        require $mapping[$class];
    }
}, true);

require __DIR__."/vendor/autoload.php";
?>