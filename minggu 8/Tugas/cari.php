<?php
    $nama = $_POST['nama'];
    $conn = mysqli_connect("localhost","root","")
            or die("koneksi gagal");
    mysqli_select_db($conn,"bola");
    $query = mysqli_query($conn,"select * from mahasiswa inner join jurusan on mahasiswa.ID_Jur = jurusan.ID_Jur where
    nama like '%$nama%' ");
    $jumlah = mysqli_num_rows($query);
    if ($jumlah == 0){
        echo "Data tidak di temukan <br>";
    }
    else{
        while($baris = mysqli_fetch_array($query))
        {
        echo "NRP : ";
        echo $baris['NRP'];
        echo "<br>";
        echo "Nama : ";
        echo $baris['nama'];
        echo "<br>";
        echo "Jurusan :";
        echo $baris['NamaJur'];
        echo "<br>";
        echo '<img src="'.$baris['foto'].'">';
        echo "<br>";
        }
        echo "saya";
    }

?>