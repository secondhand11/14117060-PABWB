<html>
    <head>
        <title>Form Biodata</title>
    </head>
    <body>
        <form action="TM_7hasil.php" method="post">
            Nama : <br>
            <input type="text" name="nama"> <br>
            Alamat : <br>
            <input type="text" name="alamat"><br>
            Jenis Kelamin : <br>
            <input type="radio" name="jk" value="Laki-laki"> Laki-laki
            <input type="radio" name="jk" value="Perempuan"> Perempuan
            <br>
            Golongan Darah : <br>
            <select name="goldar">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="O">O</option>
            </select>
            <br>
            Hobby : <br>
            <input type="checkbox" name="hobby[]" value="Membaca"> Membaca <br>
            <input type="checkbox" name="hobby[]" value="Olaharaga"> Olaharaga <br>
            <input type="checkbox" name="hobby[]    " value="Bermain"> Bermain <br>
            Keterangan :
            <textarea name="keterangan" rows = "5" cols = "50" ></textarea> <br>
            <input type="submit" name = "submit" value="submit">
        </form>
    </body>
</html>