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
$x = 5;
echo "\nBefore increment :".$x.PHP_EOL;
$y = $x++;
echo "Value of y: ".$y.PHP_EOL;
echo "After increment: ".$x.PHP_EOL;

//pre increment
$x = 5;
echo "\nBefore pre-increment of x: ".$x.PHP_EOL;
$y = ++$x;
echo "Value of y is: ".$y.PHP_EOL;
echo "After pre-increment of x is: ".$x.PHP_EOL;


//loops(for,while,do while,foreach)
//for
for($i=1; $i<=5; $i++){
    echo "The number is: ".$i.PHP_EOL;
}

//while
$j=1;
while($j<=5){
    echo "The number is: ".$j.PHP_EOL;
    $j++;
}

//do while
$k = 1;
do{
    echo "The number is: ".$k.PHP_EOL;
    $k++;
}while($k<=5);

//foreach
//for each is used under case when new value added automatically that case we won't know 
//how many value will be added, so in this case we can't use for loop or another loops 
//instead of foreach loop.

$fruits = ["banana","apple","grape","jackfruit","papaya","guava","mango","orange"];
foreach($fruits as $fruit){
    echo "The fruit name list is one by one: ".$fruit.PHP_EOL;
}

//same problem with for loop
$fruits = ["banana","apple","grape","jackfruit","papaya","guava","mango","orange"];
for($i=0; $i<=7; $i++){
    echo $fruits[$i].PHP_EOL;
}

for($i=0; $i<count($fruits); $i++){
    echo $fruits[$i].PHP_EOL;
}