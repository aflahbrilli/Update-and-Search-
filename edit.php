<?php
require 'functions.php';
if(isset($_POST['submit']))
{
    if(isset($_POST['submit']))
    {
        if(tambah($_POST)>0)
        {
            echo "
            <script>
            alert('data berhasil disimpan');
            document.location.href='index.php';
            </script>

            ";
        }else{
            echo"
            <script>
            alert('data gagal disimpan');
            document.location.href='tambah.php';
            </script>";
            echo "<br>";
            echo mysqli_error($conn);
        } 
    }
}

$id=$_GET[id];
//var_dump($id);

$mhs=query(" SELECT * FROM mahasiswa WHERE id=$id")[0];
//var_dump($mhs[0]["Nama"]);
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Update data</title>
    </head>
    <body>
        <h1>Update Data Mahasiswa</h1>
        <form action="" method="post">
        <li>
            <input type="hidden" name="id" value="<?= $mhs[id] ?>">
        </li>
            <ul>
                <li>
                <label for="Nama">Nama :</label>
                <input type="text" name="Nama" id="Nama">
                </li>
                <li>
                <label for="Nim">NIM :</label>
                <input type="text" name="Nim" id="NIM" required >
                </li>
                <li>
                <label for="Email">Email :</label>
                <input type="text" name="Email" id="Email" required >
                </li>
                <li>
                <label for="Jurusan">Jurusan :</label>
                <input type="text" name="Jurusan" id="Jurusan" required >
                </li>
                <li>
                <label for="Gambar">Gambar :</label>
                <input type="text" name="Gambar" id="Gambar" required>
                </li>
                <li>
                <button type="submit" name="submit">Update</button>
                </li>
            </ul>
        </form>
</body>
</html>
