<?php 

include_once("koneksi.php");


$id = $_GET['id'];

$result = mysqli_query($mysqli, "DELETE FROM manusia WHERE id=$id");

header("Location:index.php");
?>