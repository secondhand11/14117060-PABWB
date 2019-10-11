<?php
$nilai = [70,60,45,68,90,100,80,90,75,76,40,95,56,80,76];
$sum = 0;
$rata = 0;
for($i=0;$i < count($nilai);$i++){
    $sum += $nilai[$i];
}
$rata = $sum / count($nilai);
echo "Nilai siswa :";
for($i=0;$i < count($nilai);$i++){
    echo "$nilai[i],";
}
echo "<br>";
echo "Rata-rata nilai adalah : $rata<br>";
if($rata > 80 && $rata <=100){
    echo "Lulus dengan nilai A";
}
else if ($rata > 70 && $rata <=80){
    echo "Lulus dengan nilai B";
}
else if ($rata > 60 && $rata <=70){
    echo "Lulus dengan nilai C";
}
else if($rata > 50 && $rata <=60){
    echo "Lulus dengan nilai D";
}
else if($rata >= 0  && $rata < 50){
    echo "Lulus dengan nilai E";
}
echo "<br>";
sort($nilai);
echo "Daftar 5 Nilai Terendah = ";
for ($i=0;$i<5;$ii++){
    echo "$nilai,";
}
echo "<br>";
rsort($nilai);
echo "Daftar 5 Nilai Tertinggi = ";
for ($i=0;$i<5;$ii++){
    echo "$nilai,";
}