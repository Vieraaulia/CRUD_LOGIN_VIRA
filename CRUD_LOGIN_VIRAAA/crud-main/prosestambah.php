<?php
$nama =$_POST['nama'];
$kelas =$_POST['kelas'];
$id =$POST['id'];

$database = new PDO("mysql:host=localhost;dbname=sekolah_smk,'root','');
$query = $database->query("insert into siswa values('','$nama','$kelas')");

if($query){
    header("locationL:index.php");
}