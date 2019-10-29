<?php
function faktorrial($a){
    if ($a==1){
        return 1;
    }
    else {
        return $a * faktorrial($a-1); 
    }
}
$hasil = faktorrial(5);
echo "Faktorial dari 5 = $hasil";

?>