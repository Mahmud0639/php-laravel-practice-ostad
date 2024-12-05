<?php
//condition
$marks = 105;
if($marks<=30){
    echo "Failed";
}else{
    echo "Passed";
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