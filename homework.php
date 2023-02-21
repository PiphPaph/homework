<?php
//function Sqare($a, $b, $c)
//{
$a = $argv[1];
$b = $argv[2];
$c = $argv[3];


    $D = $b ** 2 - 4 * $a * $c;
    if ($D < 0) {
        echo 'корней нет';
    }
    elseif ($D == 0) {
        $x = (($b * -1) + sqrt($D)) / (2 * $a);
        echo "корень один , $x";
    }
    elseif ($D > 0) {
        $x1 = (($b * -1) + sqrt($D)) / (2 * $a);
        $x2 = (($b * -1) - sqrt($D)) / (2 * $a);
        echo "корня два, $x1 , $x2";
    }





