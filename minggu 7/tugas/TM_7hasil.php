<?php
if (isset($_POST["submit"])) {

    $nama = $_POST["nama"];

    $alamat = $_POST["alamat"];

    $gender = $_POST["jk"];

    $goldar = $_POST["goldar"];

    $hobi = $_POST["hobby"];

    $keterangan = $_POST["keterangan"];
}

echo "Nama           : $nama<br>";
echo "Alamat         : $alamat<br>";
echo "Jenis Kelamin  : $gender<br>";
echo "Golongan Darah : $goldar<br>";
echo "Hobby          : ";
foreach($hobi as $value){
    echo "$value ,";
}
echo "<br>";
echo "Keterangan     : $keterangan<br>";

?>