<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>CRUD Data Game</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 30px;
    }
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 15px;
    }
    table, th, td {
      border: 1px solid #333;
    }
    th, td {
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #ddd;
    }
    a {
      margin-right: 5px;
    }
  </style>
</head>
<body>

  <h2>Data Game</h2>
  <a href="tambah.php">Tambah Data</a>

  <table>
    <tr>
      <th>No</th>
      <th>Judul</th>
      <th>Genre</th>
      <th>Platform</th>
      <th>Tahun</th>
      <th>Harga</th>
      <th>Aksi</th>
    </tr>

    <?php
    $no = 1;
    $query = mysqli_query($koneksi, "SELECT * FROM game ORDER BY id DESC");
    while ($data = mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['judul']; ?></td>
      <td><?php echo $data['genre']; ?></td>
      <td><?php echo $data['platform']; ?></td>
      <td><?php echo $data['tahun']; ?></td>
      <td><?php echo $data['harga']; ?></td>
      <td>
        <a href="edit.php?id=<?php echo $data['id']; ?>">Edit</a>
        <a href="hapus.php?id=<?php echo $data['id']; ?>" onclick="return confirm('Yakin mau hapus?')">Hapus</a>
      </td>
    </tr>
    <?php } ?>

  </table>

</body>
</html>
