<?php
//logical operator
$isActive = true;
$isPending = true;
$notIsActive = !$isActive;

echo "\nFor the OR: ".($isActive | $isPending);
echo "\nFor the AND: ".($isActive && $isPending);

// In PHP, when a boolean is concatenated with a string, false is converted to an empty string (""), and true is converted to "1". 
//This is why your !$isActive appears blank instead of showing 0.
// If you want to display 0 for false explicitly, you need to cast the boolean to an integer.

echo "\nFor the NOT: ".(int)$notIsActive;
//we can also do like this
echo "\nFor the NOT: ".(int)(!$isActive).PHP_EOL;

//increment and decrement
//post increment
/* $x = 5;
echo "\nBefore increment :".$x.PHP_EOL;
$y = $x++;
echo "Value of y: ".$y.PHP_EOL;
echo "After increment: ".$x.PHP_EOL; */

//pre increment
$x = 5;
echo "\nBefore pre-increment of x: ".$x.PHP_EOL;
$y = ++$x;
echo "Value of y is: ".$y.PHP_EOL;
echo "After pre-increment of x is: ".$x.PHP_EOL;