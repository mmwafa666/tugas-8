<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Tambah Data</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
    background-color:rgb(255, 0, 0);
    color:rgb(247, 246, 247);
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;  
    align-items: center;
    padding-top: 2rem;
    }
    
    .form-container {
      max-width: 600px;
      margin: 50px auto;
      background-color:rgb(12, 26, 96);
      padding: 70px;
      border-radius: 10px;
      border: 1px solid #333;
    }

    .form-container h2 {
      text-align: center;
      margin-bottom: 25px;
      color: #f0f0f0;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 6px;
      color: #ccc;
    }

    input[type="text"] {
      width: 97%;
      padding: 10px;
      border: 1px solid #444;
      background-color:rgb(40, 39, 39);
      color: #fff;
      border-radius: 5px;
    }

    input[type="text"]:focus {
      outline: none;
      border-color: #555;
      background-color: #333;
    }

    .btn-submit {
      background-color: #fff;
      color: black;
      padding: 10px 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
      width: 37.8rem;
      margin-top: 10px;
    }

    .btn-submit:hover {
      background-color:rgb(186, 25, 25);
    }

    .btn-back {
      display: inline-block;
      margin-top: 15px;
      color: #ccc;
      text-decoration: none;
    }

    .btn-back:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>

<?php 
require_once "mahasiswa.php";
$movie = new Mahasiswa();
$id = $_GET['id'];
$datas = $movie->getDataById($id);
foreach ($datas as $data) {
?>
<div class="form-container">
  <h2>Update Data</h2>
  <form  method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="npm">NPM :</label>
      <input type="text" name="npm" required value="<?= $data['npm'] ?>">
    </div>

    <div class="form-group">
      <label for="nama">Nama :</label>
      <input type="text" name="nama" required value="<?= $data['nama'] ?>">
    </div>

    <div class="form-group">
      <label for="kelas">Kelas :</label>
      <input type="text" name="kelas" required value="<?= $data['kelas'] ?>">
    </div>

    <div class="form-group">
      <label for="jk">Jenis Kelamin :</label>
      <input type="text" name="jk" required value="<?= $data['jk'] ?>">
    </div>

    <button type="submit" class="btn-submit" name="submit">Simpan</button>
  </form>
   <?php 
}
            if (isset($_POST['submit'])) {
            $npm = $_POST['npm'];
            $nama = $_POST['nama'];
            $kelas = $_POST['kelas'];
            $jk = $_POST['jk'];
            

            $data = [
                'npm' => $npm,
                'nama' => $nama,
                'kelas' => $kelas,
                'jk' => $jk
            ];
            $where = ['id' => $id];
            $movie->updateData($data, $where);
            echo "<script>alert('Data Berhasil Di Update'); window.location.href='index.php';</script>";    
        }
        ?>

  <a href="index.php" class="btn-back">← Kembali ke tabel</a>
</div>

</body>
</html>
