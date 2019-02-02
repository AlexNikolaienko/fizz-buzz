<?php
echo "Let`s count fizz-buzz! \n";
$handle = fopen ("php://stdin","r");
$a = (int)fgets($handle);
$b = (int)fgets($handle);
$c = (int)fgets($handle);

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
?>