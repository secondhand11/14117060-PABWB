<?php
    function swap(&$a,&$b){
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    $a = 1;
    $b = 2;
    echo "a = $a<br>";
    echo "b = $b<br>";
    swap($a,$b);
    echo "Hasil setelah di tukar: a = $a | b = $b";
?>