<?php
//condition
$marks = 50;
if($marks<=30){
    echo "Failed";
}else{
    echo "Passed";
}


//nested condition
if($marks>=33){
    echo "\n\nYou are Passed!";
    if($marks>33){
        echo "\nYou are chosen to be a partner of the Programming department.";
    }else{
        echo "\nContact to the HR.";
    }
}else{
    echo "\nYou are Failed!";
}


//ternary operator
$result = ($marks<=30)?"Failed":"Passed";
echo "\n\n".$result;

//switch statement
switch($marks){
    case $marks<=30:
        echo "\nF";
        break;
    case $marks>=33 && $marks<=40:
        echo "\nD";
        break;
    case 44:
        echo "\nC";
        break;
    default:
        echo "\nUnknown";    
}