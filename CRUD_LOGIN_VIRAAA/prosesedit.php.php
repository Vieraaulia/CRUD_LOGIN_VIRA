<?php
$nama = $_POST['nama'];
$nama = $_POST['kelas'];
$nama = $_POST['id'];

$database = new PDO("mysql:host=localhost;dbname=sekolah_smk",'root','');
$query = $database->query("UPDATE `siswa` SET nama='$nama',id_kelas='$kelas' where id='$id'");

if($query){
    header("location:index.php");
}