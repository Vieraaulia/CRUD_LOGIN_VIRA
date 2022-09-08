<?php

session_start();
if(!isset($_SESSION["username"])) { // jika ada session username
   header("Location:form_login.php");
}
?>
<h1>Halaman Beranda </h1>
<a href="user2.php">Halaman User</a><br />
<a href="hapus2.php">Logout</a>

