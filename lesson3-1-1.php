<?php
$f_array = file("myfile.txt");
$r = (int)$f_array[0];
$v = (int)$f_array[1];
$y = (int)$f_array[2];

function fizz_buzz($a, $b, $c){
    $z = 1;
    for ($z > 0; $z <= $c; $z++){
        if (($z % $a == 0) && ($z % $b == 0)){
            echo "FB,";
        } elseif ($z % $a == 0){
            echo "F,";
        } elseif ($z % $b == 0){
            echo "B,";
        } else {
            echo "$z,";
        }
    }
}
fizz_buzz($r, $v, $y);
?>