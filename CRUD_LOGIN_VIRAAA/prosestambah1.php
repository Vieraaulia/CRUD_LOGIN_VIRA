<?php
$nama =$_POST['nama'];
$kelas =$_POST['kelas'];
$id =$POST['id'];

$database = new PDO("mysql:host=localhost;dbname=siswa12,'root','' ");
$query = $database->query("insert into siswa values ('','$nama','$kelas')");

if($query){
    header("location:index.php");
}