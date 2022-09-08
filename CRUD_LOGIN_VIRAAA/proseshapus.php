<?php
$id = $_GET['id'];

$database = new PDO("mysql:host=localhost;dbname=sekolah_smk",'root','');
$query = $database->query("DELETE FROM siswa where id='$id'");

if($query){
    header("location:index.php");
}