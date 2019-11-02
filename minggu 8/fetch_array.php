<html>
    <head>
        <title>
            Koneksi Database MySQL
        </title>
    </head>
    <body>
        <h1>Koneksi database dengan MySQL_fetch_array</h1>
        <?php
        $conn=mysqli_connect('localhost','root','') or die ("koneksi gagal");
        mysqli_select_db($conn,"bola");
        $hasil = mysqli_query($conn,"select * from liga");
        while($row = mysqli_fetch_array($hasil)){
            echo "Liga ".$row["negara"];
            echo " Mempunyai ".$row[2];
            echo " wakil di liga champion <br>";
        }
        ?>
    </body>
</html>