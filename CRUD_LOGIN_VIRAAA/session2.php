<?php
session_start();
   $username = $_POST['username'];
   $password = $_POST['password'];

// koneksi database 
$koneksi = new PDO("mysql:host=localhost;dbname=rumahsakit","root","");
// cari di database, berdasarkan username dan password
$query = $koneksi->query("select * from user where username='$username' AND password='$password'");

// cek jika ada data, maka bikin session ke halaman beranda
if($query->rowCount() > 0 ){
    // echo "data ada";
    // die();
    $_SESSION["username"] = $_POST['username'];
    $_SESSION["password"] = $_POST["password"];
  header("location:beranda2.php");
}else{
    // jika tidak maka kehalaman login
    // echo "data tidak ada";
    // die();
    header("location:form_login.php");
}