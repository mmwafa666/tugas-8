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
      background-color:rgb(70, 68, 68);
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

<div class="form-container">
  <h2>Tambah Data</h2>
  <form method="post" enctype="multipart/form-data">

    <div class="form-group">
      <label for="npm">NPM :</label>
      <input type="text" name="npm" id="npm">
    </div>

    <div class="form-group">
      <label for="nama">Nama :</label>
      <input id="nama" type="text" name="nama" required>
    </div>

    <div class="form-group">
      <label for="kelas">Kelas :</label>
      <input type="text" name="kelas" id="kelas" required>
    </div>

    <div class="form-group">
      <label for="jk">Jenis Kelamin :</label>
      <input type="text" name="jk" id="jk" required>
    </div>

    <button type="submit" class="btn-submit" name="submit">Simpan</button>
  </form>
   <?php 
            require_once "mahasiswa.php";
            $movie = new Mahasiswa();

            if(isset($_POST['submit'])){
                $id = $_POST['id'];
                $npm = $_POST['npm'];
                $nama = $_POST['nama'];
                $kelas = $_POST['kelas'];
                $jk = $_POST['jk'];

                $data = [
                    'id' => $id,
                    'npm' => $npm,
                    'nama' => $nama,
                    'kelas' => $kelas,
                    'jk' => $jk,
                ];

                $movie->addData($data);
                echo "<script>alert('Data Berhasil Di Simpan'); window.location.href='index.php'</script>";

            }
        ?>

  <a href="index.php" class="btn-back">← Kembali ke tabel</a>
</div>

</body>
</html>
