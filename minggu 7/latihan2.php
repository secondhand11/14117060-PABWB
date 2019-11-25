<?php
    if($_POST["nama"]!=NULL){
        $nama = $_POST["nama"];
        hitung($nama);
    }
    else{
        $nama = $_POST["nama"];
        $warna = $_POST["warna"];
        hitung($nama,$warna);
    }

function hitung($nama, $warna = "merah"){
    $panjang = strlen($nama);
    $harga = 0;
    if($nama <= 10){
        $harga  = $panjang * 300;
    }
    else if ($nama <= 20){
        $harga  = $panjang * 500;
    }
    else{
        $harga  = $panjang * 700;
    }
    echo "Nama : $nama <br>";
    echo "Harga Total : $harga Rupiah <br>";
    echo "Warna Font : $warna";
}

?>