<?php
require_once "mahasiswa.php";
$lagu = new Mahasiswa();

$lagu->deleteData();
echo "<script>alert('Data Berhasil Di Hapus'); window.location.href='index.php'</script>";
?>

