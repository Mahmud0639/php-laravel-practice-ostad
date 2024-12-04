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
   //we can't use const in the function level it is only usable in the class level
   //so here we can't write "const PI = 3.14" it throws an error every time.
   //so most of the time we should use define instead of using of const, because we can
   //use define everywhere and access it from everywhere
   //const PI = 3.14;
   global $name;
   echo "\nMy name is $name";
}

displayGlobalName();

//super variable
//$_GET, $_POST, $_SERVER, $_REQUEST $_SESSION

//CONSTANTS
//Here SITE_NAME act as a variable and the Shopper act as a variable value
define("SITE_NAME","Shopper");
echo SITE_NAME;

//class level const
class Test{
   const PI = 3.14;

}

//here :: called as "scope resolution" operator
echo "\nValue of PI is: ".Test::PI;


//single line comment keyboard: ctrl + /

/* for multiline comment
 we can use 
shift + Alt + A */