<?php
require("../class/database.php");
require("../class/form.php");
require("../template/sidenav.php");

$database = new database();

// Mengambil data dari tabel 'tb_latihan' di database
$data = $database->data('tb_lab6');

?>
<html>

<head>
  <title>Daftar Mahasiswa</title>
  <link rel="stylesheet" href="../template/style.css">
</head>

<body>
  <div class="table-container">
    <h2>Daftar Mahasiswa</h2>
    <table class="my-table">
      <tr>
        <th>Nim</th>
        <th>Nama</th>
        <th>Kelas</th>
        <th>Status</th>
        <th>Alamat</th>
        <th>Nomer</th>
        <th>Aksi</th>
      </tr>
      <?php
      // Menampilkan data dalam tabel
      foreach ($data as $row) {
      ?>
        <tr>
          <td> <?= $row['Nim']; ?></td>
          <td> <?= $row['Nama']; ?></td>
          <td> <?= $row['Kelas']; ?></td>
          <td> <?= $row['Status']; ?></td>
          <td> <?= $row['Alamat']; ?></td>
          <td> <?= $row['Nomer']; ?></td>
          <td>
            <a href="artikel/update.php?Nim=<?= $row['Nim']; ?>"><input type='button' class='btn-update'></a>
            <a href="artikel/delete.php?Nim=<?= $row['Nim']; ?>"><input type='button' class='btn-delete'></a>
          </td>
        </tr>
      <?php
      }
      ?>
    </table>
  </div>
  <?php require("../template/footer.php"); ?>
</body>

</html>