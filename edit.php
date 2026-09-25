<?php include "koneksi.php";

$id = $_GET['id'];

if (isset($_POST['update'])) {
  $judul = $_POST['judul'];
  $genre = $_POST['genre'];
  $platform = $_POST['platform'];
  $tahun = $_POST['tahun'];
  $harga = $_POST['harga'];

  $query = "UPDATE game SET judul='$judul', genre='$genre', platform='$platform', tahun='$tahun', harga='$harga' WHERE id='$id'";
  mysqli_query($koneksi, $query);

  header("Location: index.php");
}

$ambil = mysqli_query($koneksi, "SELECT * FROM game WHERE id='$id'");
$data = mysqli_fetch_array($ambil);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Edit Data Game</title>
  <style>
    body { font-family: Arial, sans-serif; margin: 30px; }
    input { display: block; margin-bottom: 10px; padding: 5px; width: 250px; }
    label { font-weight: bold; }
  </style>
</head>
<body>

  <h2>Edit Data Game</h2>

  <form method="POST" action="edit.php?id=<?php echo $data['id']; ?>">
    <label>Judul Game</label>
    <input type="text" name="judul" value="<?php echo $data['judul']; ?>" required>

    <label>Genre</label>
    <input type="text" name="genre" value="<?php echo $data['genre']; ?>" required>

    <label>Platform</label>
    <input type="text" name="platform" value="<?php echo $data['platform']; ?>" required>

    <label>Tahun Rilis</label>
    <input type="number" name="tahun" value="<?php echo $data['tahun']; ?>" required>

    <label>Harga</label>
    <input type="number" name="harga" value="<?php echo $data['harga']; ?>" required>

    <br>
    <button type="submit" name="update">Update</button>
    <a href="index.php">Batal</a>
  </form>

</body>
</html>
