<html>
    <head>
        <title>Simpan Data Mahasiswa</title>
    </head>
    <body>
        <?php
            $NRP = $_POST["NRP"];
            $nama = $_POST["nama"];
            $jurusan = $_POST["jurusan"];
            $target_dir = "gambar/";
            $target_file = $target_dir . basename($_FILES["foto"]["name"]);
            $files = $_FILES["foto"]["tmp_name"];
            move_uploaded_file($files, $target_file);
            if($jurusan == "Telekomunikasi"){
                $id = "01";
            }
            else if($jurusan == "Elka"){
                $id = "02";
            }
            else if ($jurusan == "IT"){
                $id = "03";
            }
            else{
                $id = "04";
            }
            $conn = mysqli_connect("localhost","root","")
            or die("koneksi gagal");
            mysqli_select_db($conn,"bola");
            $sqlstr="insert into mahasiswa values ('$NRP','$nama','$id','$target_file')";
            $hasil = mysqli_query($conn,$sqlstr);
            if($hasil){
                echo "Simpan data berhasil berhasil dilakukan";
            }
            else{
                echo " data gagal disimpan";
            }
            
        ?>
    </body>
</html>