<?php 

include_once("koneksi.php");

if(isset($_POST['update'])) {

    $id = $_POST['id'];

    $no_id = $_POST['no_id'];
    $nama = $_POST['nama'];
    $komentar = $_POST['komentar'];

    $result = mysqli_query($mysqli,"UPDATE manusia SET no_id='$no_id', nama='$nama', komentar='$komentar' WHERE id=$id");

    header("Location:index.php");
}
?>
<?php 

$id = $_GET['id'];

$result = mysqli_query($mysqli,"SELECT * FROM manusia WHERE id=$id");

while($orang = mysqli_fetch_array($result)) 
{
    $no_id = $orang['no_id'];
    $nama = $orang['nama'];
    $komentar = $orang['komentar'];
}
?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_orang" method="post" action="edit.php">
        <table border="0">
            <tr>
                <td>No_id</td>
                <td><input type="number" name="no_id" value=<?php echo $no_id;?>></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" value=<?php echo $nama;?>></td>
            </tr>
            <tr>
                <td>Komentar</td>
                <td><input type="text" name="komentar" value=<?php echo $komentar;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>