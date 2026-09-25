<?php include "koneksi.php";

if (isset($_POST['simpan'])) {
  $judul = $_POST['judul'];
  $genre = $_POST['genre'];
  $platform = $_POST['platform'];
  $tahun = $_POST['tahun'];
  $harga = $_POST['harga'];

  $query = "INSERT INTO game (judul, genre, platform, tahun, harga) VALUES ('$judul', '$genre', '$platform', '$tahun', '$harga')";
  mysqli_query($koneksi, $query);

  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Tambah Data Game</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; }
    input { display: block; margin-bottom: 10px; padding: 5px; width: 250px; }
    label { font-weight: bold; }
  </style>
</head>
<body>

  <h2>Tambah Data Game</h2>

  <form method="POST" action="tambah.php">
    <label>Judul Game</label>
    <input type="text" name="judul" required>

    <label>Genre</label>
    <input type="text" name="genre" required>

    <label>Platform</label>
    <input type="text" name="platform" required>

    <label>Tahun Rilis</label>
    <input type="number" name="tahun" required>

    <label>Harga</label>
    <input type="number" name="harga" required>

    <br>
    <button type="submit" name="simpan">Simpan</button>
    <a href="index.php">Batal</a>
  </form>

</body>
</html>
