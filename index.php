<?php

include_once("koneksi.php");

$result = mysqli_query($mysqli,"SELECT * FROM manusia ORDER BY id DESC");
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO</title>
</head>
<body>
    <center><h1>Aku Ngelist Disini</h1></center>
    <a href="tambah.php">Tambah Curhat</a><br/><br/>
    <table width="50%" border="1">
        <tr>
            <th>No_id</th> <th>Nama</th> <th>Komentar</th> <th>Pilihan</th>
        </tr>
        <?php 
        while($orang = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>".$orang['no_id']."</td>";
            echo "<td>".$orang['nama']."</td>";
            echo "<td>".$orang['komentar']."</td>";
            echo "<td><a href='edit.php?id=$orang[id]'>Edit</a> | <a href='delete.php?id=$orang[id]'>Hapus</a></td></tr>";
        }
        ?>
    </table>
</body>
</html>