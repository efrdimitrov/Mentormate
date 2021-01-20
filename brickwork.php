<?php
$arr = explode(' ', readline());

$n = $arr[0];
$m = $arr[1];
$array = array_splice($arr, 2);

if($n > 100 && $m > 100) {
    exit;
    if($n % 2 == 0 and $m % 0 == 0) {
        exit;
    }
}

$j = 0;

    for($i = 0; $i < $n * $m / 2; $i += 2){

        if($j % $m == 0 and $j > 0 and $j < $n * $m - $m) {
            $j += $m;
        } 
        $current = $array[$j];
        $next = $array[$j + 1];

        array_splice($array, $j, 1, $i + 1);
        array_splice($array, $j + $m + 1, 1, $i + 2);
        if($current == $next)  { // horizontal
            array_splice($array, $j + 1, 1, $i + 2);
            array_splice($array, $j + $m, 1, $i + 1);
        } else{ // vertical
            array_splice($array, $j + 1, 1, $i + 1);
            array_splice($array, $j + $m, 1, $i + 2);
        }

        if($j < $n * $m -$m - 2){
            $j += 2;
        }
    }     

for($r = 0; $r < $n * $m; $r++) {
    echo $array[$r] . " ";
    $d = $r + 1;
    if($d % $m == 0 and $r >= $m - 1) {
        echo "\n";
    }
}

?>
