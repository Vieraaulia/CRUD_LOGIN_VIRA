<?php
$database = new PDO("mysql:host=localhist;dbname=sekolah_smk",'root','');
$query = $database->query('select * from siswa');

while ($data = $query->fetch()):?>

<p>
    <a href="edit.php?id=<?= $data['id']; ?>">
    <?= $data['nama'] ?>
</a>

<a href="proses_hapus.php?id=<?= $data['id'; ?>" style="color:white;background:red;padding:2px;padding:2px;border-radius:3px">hapus
</a>

</p>
<?php endwhile ?>