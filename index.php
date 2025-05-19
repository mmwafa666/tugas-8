<?php
    require_once "Mahasiswa.php";
    $mhs = new Mahasiswa();
    $table = "mahasiswa";
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
    <h1>Tabel Mahasiswa</h1>
    <table border="1">
        <tr>
            <th>No</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Kelas</th>
        </tr>
    <?php
    $no = 1;
    $datas = $mhs->tampil($table);
    foreach ($datas as $data){
        echo "<tr>";
        echo "<td>".$no++."</td>";
        echo "<td>".$data['npm']."</td>";
        echo "<td>".$data['nama']."</td>";
        echo "<td>".$data['kelas']."</td>";
        echo "</tr>";
    }
    ?>
    </table>
</body>
</html>