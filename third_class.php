<?php
//detecting positive, negative or zero
echo "Enter a number: ";
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
if($userName === USERNAME && $userPassword === PASSWORD){
    echo "Success. Redirecting to the next page.";
}else{
    echo "Authentication failed. Try again.";
}
