<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <title>Edit Mahasiswa 4733</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-4 mb-4">Edit Mahasiswa</h1>
        <?php
            // Koneksi ke Database
            include "koneksi.php";

            // Mendapatkan dari mahasiswa berdasarkan id
            $id = $_GET['id'];
            $sql = "SELECT * FROM mahasiswa WHERE id = '$id'";
            $result = mysqli_query($link, $sql);
            $data = mysqli_fetch_assoc($result);
        ?>

        <form action="aksi_edit.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

            <div class="mb-3">
                <label for="nim" class="form-label">NIM</label>
                <input type="text" class="form_control" id="nim" name="nim" value="<?php echo $data['nim']?>" required>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form_control" id="nama" name="nama" value="<?php echo $data['nama'] ?>" required>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form_control" id="no_hp" name="no_hp" value="<?php echo $data['no_hp'] ?>" required>

            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                    <option value="Laki-laki" <?php if ($data['jenis_kelamin'] === 'Laki-laki')echo 'selected'; ?>> Laki-laki</option>
                    <option value="Perempuan" <?php if ($data['jenis_kelamin'] === 'Perempuan')echo 'selected'; ?>> Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <select name="jenis_kelamin" id="jenis_kelamin" class="form-select">
                    <option value="informatika" <?php if ($data['jurusan'] === 'informatika')echo 'selected'; ?>> informatika</option>
                    <option value="Sistem Informasi" <?php if ($data['jurusan'] === 'Sistem Informasi')echo 'selected'; ?>> Sistem Informasi</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form_control" id="alamat" name="alamat" value="<?php echo $data['alamat'] ?>" required>
            </div>
            <button class="btn btn-secondary" type="submit">Simpan</button>
            <a href="tampil_data.php" class="btn btn-secondary">Kembali</a>

        </form>
    </div>
</body>
</html>