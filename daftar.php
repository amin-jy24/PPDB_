<!DOCTYPE html>
<html>
<head>
    <title>Formulir Pendaftaran</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Formulir Pendaftaran Siswa Baru</h2>
        <form action="proses_daftar.php" method="post" class="form-card">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" required>

            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label>Alamat</label>
            <textarea name="alamat" required></textarea>

            <button type="submit" class="btn">Kirim Pendaftaran</button>
        </form>
    </div>
</body>
</html>