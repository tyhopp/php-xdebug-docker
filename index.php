<?php

// Check if script is executing too quickly
sleep(1);

function addNumbers($a, $b) {
    $sum = $a + $b;
    return $sum;
}

// Check entire configuration
// echo xdebug_info();

echo "Starting script\n";

$number1 = 5;
$number2 = 10;

// Check if other things besides breakpoints can be caught by the debugger
// throw new Exception("This is an exception");

// Set a breakpoint here or anywhere else in the file, to debug the script
$result = addNumbers($number1, $number2);

echo "The sum of $number1 and $number2 is $result\n";
echo "End of script\n";
