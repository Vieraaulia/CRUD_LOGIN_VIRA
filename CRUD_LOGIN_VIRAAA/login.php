<?php
session_start();
   $username = $_POST['username'];
   $password = $_POST['password'];
var_dump($_POST);

// koneksi database 
$koneksi = new PDO("mysql:host=localhost;dbname=siswa12","root","");
// cari di database, berdasarkan username dan password
$query = $koneksi->query("select * from siswa where username='$username' AND password='$password'");
// echo $query->rowCount();
// die();
// cek jika ada data, maka bikin session ke halaman beranda
if($query->rowCount() > 0 ){
    // echo "data ada";
    // die();
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST["password"];
  header("location:index.php");
}else{
    // jika tidak maka kehalaman login
    // echo "data tidak ada";
    // die();
    header("location:form_login2.php");
}