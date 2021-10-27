<?php
// Я честно вводил все сам:))
echo "Give it to me!\n";
$handle = fopen ("php://stdin","r");
$number = fgets($handle);

if ($number > 100)  {
    echo "Thanks, man!";
}   elseif (($number > 10) && ($number <100)) {
    echo "OK :(";
} else echo "WHAAAAT????";


echo "\n";
if ($number > 1000) echo "\n!!!!WOOOOWWW!!!\n";

echo "Give me the mark!\n";
$handle = fopen("php://stdin", "r");
$mark = fgetc($handle);

switch ($mark) {
    case 2:
        echo "I am better";
        break;
    case 3:
        echo "OK :(";
        break;
    case 4:
        echo "I am good :)";
        break;
    case 5:
        echo "YeeeeWhaaa!";
        break;
}

echo "\n";


echo "If you are a man, prees 1!\n";
$handle = fopen("php://stdin","r");
$input = fgetc($handle);

echo ($input == 1) ? "MAAAN"  : "Hey, girl";

echo "\n";


//Константы

define("LOGIN", "admin");
define("PASSWORD","secret123");
$tmp_login = "xxl10";
$tmp_password = 12345;

$result = $tmp_login == LOGIN && $tmp_password != PASSWORD;
    echo "Check correct your password\n";
  ($tmp_login != LOGIN);
echo "User not found\n";

$tmp_login == LOGIN && $tmp_password == PASSWORD;
echo "Auth success";


// Тернарный оператор


$isStatus = true;
$isResulte  = $isStatus == true ? 43224656 : 98645623;

echo $isResulte;


// switch

$typeCar = "Lada";
switch ($typeCar) {
    case "BMW";
        echo "Selected is a very good car";
        break;
    case "Toyota";
        echo "Toyota is a very reliable car!";
        break;
    case "Lada";
        echo "Don`t buy these cars!";
        break;
}


