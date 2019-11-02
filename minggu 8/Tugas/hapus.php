<?php
    $nama = $_POST['nama'];
    $conn = mysqli_connect("localhost","root","")
            or die("koneksi gagal");
    mysqli_select_db($conn,"bola");
    $query = mysqli_query($conn,"select * from mahasiswa where
    nama like '%$nama%' ");
    $jumlah = mysqli_num_rows($query);
    if ($jumlah == 0){
        echo "Data tidak di temukan <br>";
    }
    else{
        while($hasil = mysqli_fetch_array($query)){
            unlink($hasil['foto']);
        }
        
        $query = mysqli_query($conn,"delete from mahasiswa where
    nama like '%$nama%' ");
        if ($query){
            echo "Data berhasil dihapus";
        }
        else{
            echo "Data gagal dihapus";
        }
    }


?>