<?php
//detecting positive, negative or zero
/* echo "Enter a number: ";
$number = (int)readline();

if($number>0){
    echo "\nEntered number is positive.\n";
}elseif($number<0){
    echo "\nEntered number is negative.\n";
}else{
    echo "Entered number is zero.\n";
}

//authentication failed or success
define("USERNAME","admin");
define("PASSWORD","Mahamud0$6$3$9#");

echo "\nUsername: ";
$userName = readline();
echo "\nPassword: ";
$userPassword = readline();

//condition matching with the constant value
//here "==" means only value comparing and "==="means value and data type comparing
if($userName === USERNAME && $userPassword === PASSWORD){
    echo "Success. Redirecting to the next page.";
}else{
    echo "Authentication failed. Try again.";
}

//electricity bill calculation
//when 1-100 then multiply by 5, when 101-200 then first 100 is multiply by 5 and the rest is multiply by 10
//when above 200 then multiply by 15, so first 100 multiply by 5, next 100 multiply by 10 and the rest of the
//200 is multiply by 15
echo "Enter your units: ";
$units = (int)readline();

if($units <= 100){
    $total = $units * 5;
    echo "\nTotal bill is: $total";
}elseif($units <= 200){
    $total = 100 * 5 + ($units - 100)*10;
    echo "\nTotal bill is: $total";
}else{
    $total = 100 * 5 + 100 * 10 + ($units - 200)*15;
    echo "\nTotal bill is: $total";
} */

//fahrenheit and celsius converter
define("FACTOR",9/5);
define("OFFSET",32);//we write OFFSET when need to add or subtract with a value

echo "Enter temperature value: ";
$temperature = (float) readline();

echo "Choice what you convert to: 1 for Fahrenheit and 2 for Celsius: ";
$choiceVal = (int) readline();

switch($choiceVal){
    case 1:
        $result = $temperature * FACTOR + OFFSET;
        echo "\nTemperature in Fahrenheit: $result";
        break;
    case 2:
        $result = ($temperature - OFFSET) / FACTOR;
        $formattedResult = number_format($result,2);
        echo "\nTemperature in Celsius: $formattedResult";
        break;
    default:
        echo "Invalid choice. Please try again.";    
}

