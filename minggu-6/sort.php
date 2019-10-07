<?php
$nama = ["lanirne","aduh","qifuat","toda","anevi","samid","kifuat"];
echo "Nama sebelum diurutkan = ";
for ($i=0;$i<count($nama);$i++){
    echo $nama[$i]." ";

}
sort($nama);
echo "<br>Nama Setelah di urutkan = ";
for ($i=0;$i<count($nama);$i++){
    echo $nama[$i]." ";

}
?>
