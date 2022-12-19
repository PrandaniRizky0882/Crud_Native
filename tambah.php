<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ayo ngelist</h1>
    <a href="index.php">Beranda</a>
    <br/><br/>

    <form action="tambah.php" method="post" name="formT">
        <table width="50%" border="0">
            <tr>
                <td>No_id</td>
                <td>:</td>
                <td><input type="number" name="no_id" size="30"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td>:</td>
                <td><input type="textarea" name="komentar" size="30"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="add"></td>
            </tr>
        </table>
    </form>

    <?php 
    if(isset($_POST['Submit'])) {
        $no_id = $_POST['no_id'];
        $nama = $_POST['nama'];
        $komentar = $_POST['komentar'];

        // koneksi 
        include("koneksi.php");

        // memasukan data
        $result = mysqli_query($mysqli,"INSERT INTO manusia(no_id,nama,komentar)values('$no_id','$nama','$komentar')");

        echo "sudah nglist. <a href='index.php'>Kembali</a>";    
    }
    ?>
</body>
</html>