<?php
include "koneksi.php";
$query = "SELECT * FROM biodata WHERE id = '$_GET[id]'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<div class="container">
    <h1 class="mt-5">Form Edit Data Mahasiswa</h1>
    <form action="<?='update-data.php?id='.$row['id'];?>" method="post">
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $row['nama'];?>"/>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" class="form-control"><?= $row['alamat'];?></textarea>
        </div>
        <div class="form-group">
            <label for="tmpt_lahir">Tempat Lahir</label>
            <input type="text" name="tmpt_lahir" class="form-control" value="<?= $row['tempat_lahir'];?>"/>
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" value="<?= $row['tgl_lahir'];?>"/>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>