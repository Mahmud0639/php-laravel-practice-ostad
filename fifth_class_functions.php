<?php
//two number multiplication using function
function addFunction($num1, $num2){
    $sum = $num1 + $num2;
    return $sum;
}

$resultOne = addFunction(22,20);
$resultTwo = addFunction(20,30);

$multiplicationRes = $resultOne * $resultTwo;

echo "The result is: $multiplicationRes\n";

//default value insertion in the variable 
function greeting($name="Sir"){
    echo "Hello, $name!";
}
//as we set a default value so it doesn't show any error, if we don't set any default value then it will show error
greeting();

//variadic function
//here ... means we can pass as many number pass as we can, it generally accept numbers as array
function variadicFunc(...$numbers){
    $sumRes = array_sum($numbers);
    return $sumRes;
}
echo "\n";
echo variadicFunc(10,20,30,40,50).PHP_EOL;

//mentioning return type in the function
function sumOfTwoNumbers($n1,$n2):int{
    $result = $n1 + $n2;
    return (int)$result;//type casting float result to int result, as we need an integer value although we're passing a floating point value
}

echo sumOfTwoNumbers(10,20.5).PHP_EOL;

//declaring variable type
function sumOfTwoNumbersWithType(float $n1,float $n2):int{
    $result = $n1 + $n2;
    return (int)$result;//type casting float result to int result, as we need an integer value although we're passing a floating point value
}

echo sumOfTwoNumbersWithType(30,20.5).PHP_EOL; 

//we can also mention int and float type at a time
function sumOfTwoNumbersWithMentionMultiple(int $n1,float $n2):int|float{
    $result = $n1 + $n2;
    return $result;
}

echo sumOfTwoNumbersWithMentionMultiple(30,20.5).PHP_EOL; 

//variable scope
$staff = "Saki Han";

function variableScopeGlobal(){
    global $staff;
    echo "$staff make a cup of tea for me!".PHP_EOL;
}

variableScopeGlobal();

//type hinting
function typeHintPrimitive(int $a, float $b):int|float{
    $d = $a + $b;
    return $d;
}
echo typeHintPrimitive(40,20.33).PHP_EOL;

function processArray(array $data): void {
    foreach ($data as $item) {
        echo $item . PHP_EOL;
    }
}

processArray([1,2,3,4]);
processArray(["apple", "banana", "cherry"]); // Outputs each item in the array

//null data passing
function typeHintNull(?string $name):string{//here single "?" means nullable
    return $name??"Unknown Guest";//here double "??" means if variable value is null then
}

typeHintNull(null);

//anonymous function
$anonyFunc = function($x,$y){
    $z = $x + $y;
    return $z;
};

echo $anonyFunc(5,10).PHP_EOL;

//arrow function
$arFunc=fn($m,$n)=>$m*$n;//here => is used instead of return statement
echo $arFunc(5,5).PHP_EOL;

//factorial with for loop
function factWithForLoop($n){
    $result = 1;
    for($i = 1; $i<=$n; $i++){
        $result = $result * $i;
    }
    return $result;
}

echo factWithForLoop(5).PHP_EOL;

//factorial with Recursive function
function factWithRec($m){
    if($m === 0){
        return 1;
    }
    $result = $m * factWithRec($m-1);
    return $result;
}

echo factWithRec(6);
