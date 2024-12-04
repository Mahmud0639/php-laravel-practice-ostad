<?php
echo "Hello world!";
echo "\n";

class myFunc{
   public $name = "Mahmud Islam";
   public $age = 30;
}

$func = new myFunc();
$func->name = "Md. Mahamudul Islam";

echo "My name is {$func->name}";
echo "\n";
echo "myFunc object id is: ".spl_object_id($func);

//global scope
$name = "Mahmud Islam";

function displayGlobalName(){
//we need to mention global before a variable that would be used in the function
   global $name;
   echo "\nMy name is $name";
}

displayGlobalName();