<?php
// Koneksi ke database 
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ambil data dari formulir
    $id_jurusan = $_POST['id_jurusan'];
    $nama_jurusan = $_POST['nama_jurusan'];
 
// query  untuk memperbarui data
$query = "UPDATE jurusan SET nama_jurusan='$nama_jurusan' WHERE id_jurusan='$id_jurusan'";
mysqli_query($conn, $query);

// redirect setelah berhasil memperbarui data
header("Location: index.php");
exit();
}

// Ambil data jurusan berdasarkan id_jurusan
$id_jurusan = $_GET['id_jurusan'];
$query = "SELECT * FROM jurusan WHERE id_jurusan='$id_jurusan'";
$result = mysqli_query($conn, $query);
$jurusan = mysqli_fetch_assoc ($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Edit jurusan</h2>
        <form method="POST">
            <div class="form-group">
                <label for="id_jurusan">id_jurusan:</label>
                <input type="text" class= "form-control" id="id_jurusan" name="id_jurusan" value="<?php echo $jurusan ['id_jurusan']; ?>" readonly>
            </div>
            <div class="form-group">
                <label for="nama_jurusan">nama_jurusan:</label>
                <input type="text" class= "form-control" id="nama_jurusan" name="nama_jurusan" value="<?php echo $jurusan ['nama_jurusan']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>

        </form>
    </div>
</body>
</html>