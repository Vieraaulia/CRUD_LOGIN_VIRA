<?php
$id = $_GET['id'];
$database =new PDO("mysql:host=localhost;dbname=sekolah_smk",'');
$query = $database->query("select * from siswa shere id=$id");
$data = $query->fetch();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="prosesedit.php" method="post">
        <input type="text" name="nama" values="<?= $data['nama'] ?>">
    <div>
    </div>
        <label>kelas</label>
        <select name="kelas" id="">
            <option value="1" <?= $data['id_kelas'] == '1' ? 'selected' : '' ?>>12 RPL</option>
            <option value="2" <?= $data['id_kelas'] == '2' ? 'selected' : '' ?>>11 RPL</option>
</select>
</div>
<input type="submit" value="simpan">
</form>
</body>
</html>

