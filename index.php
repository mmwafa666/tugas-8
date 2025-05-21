<?php

require_once "mahasiswa.php";

$bmth_song = new Mahasiswa();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
        <header>
            <h1>Table Mahasiswa</h1>
        </header>
        <section class="container">
            <main class="content">
                <table border="1">
                    <tr>
                        <th>No</th>
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                    <?php
            
                    $no = 1;

                    $datas = $bmth_song->getAllData();

                    foreach ($datas as $data){
                        echo "<tr>";
                        echo "<td>".$no++."</td>";
                        echo "<td>".$data['npm']."</td>";
                        echo "<td>".$data['nama']."</td>";
                        echo "<td>".$data['kelas']."</td>";
                        echo "<td>".$data['jk']."</td>";
                        echo "<td>";
                        ?>
                        <button class="btn edit">
                            <a class="edit-link" href="<?= "edit.php?id=$data[id] "?> "> Edit </a>
                        </button>
                        <button class="btn delete">
                            <a class="delete-link" onclick="return confirm('Apa anda yakin ingin menghapus ini ?')" href="<?= "hapus.php?id=$data[id]" ?>"> Delete </a>
                        </button>
                        <?php
                        echo "</td>";
                        echo "</tr>";
                    }   
                    ?>
                </table>
                <a href="tambah.php">
                    <button class="btn add">+ Tambah Data</button>
                </a>
            </main>
        </section>
        
        
</body>
</html>