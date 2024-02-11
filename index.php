<?php
// koneksi ke database
include 'koneksi.php';

// Query untuk mengambil semua data user
$query = "SELECT * FROM jurusan";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar jurusan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
    /* Gaya kustom untuk efek hover pada tombol */
    .btn:hover {
        background-color: #fff !important;
        color: #000 !important;
    }
    /* Gaya kustom untuk tombol home */
    #home-btn {
        position: fixed;
        bottom: 10px;
        right: 10px;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Daftar jurusan</h2>
      
   <table class="table">
   <thead>
     <tr>
    <th>Id Jurusan</th>
    <th>Nama Jurusan</th>
    <th>Aksi</th>   
</tr>
  </thead>
    <tbody>
    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
         <td><?php echo $row['id_jurusan']; ?></td>
         <td><?php echo $row['nama_jurusan']; ?></td>
        <td>
            <a href="update.php?id_jurusan=<?php echo $row ['id_jurusan']; ?>" class="btn btn-warning btn-sm">Edit</a>
            <a href="delete.php?id_jurusan=<?php echo $row ['id_jurusan']; ?>" class="btn btn-danger btn-sm">DELETE</a>
        </td>
   </tr>
    <?php } ?>
 </tbody>
</table>
<a href="create.php" class="btn btn-primary mb-3">Tambah Jurusan</a>
</div>
<a href="../sekolah.php" id="home-btn" class="btn btn-primary">Home</a>
</body>
</html>