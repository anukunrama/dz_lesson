<?php
$fizz = 5;
$buzz = 8;
$number = 22;

for ($i = 1; $i <= $number; $i++) {
    if ($i % $fizz == 0 && $i % $buzz == 0){
        echo "FB";
    }
    elseif ($i % $fizz == 0){
        echo "F";
    }
    elseif ($i % $buzz == 0){
        echo "B";
    }
    else {
        echo ($i);
    }
}
