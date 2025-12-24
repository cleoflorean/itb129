<?php
include("config.php");

// cek apakah id dikirim
if (!isset($_GET['id'])) {
    header('Location: list-maba.php');
}

// ambil id dari URL
$id = $_GET['id'];

// ambil data dari database berdasarkan id
$sql = "SELECT * FROM pendaftaran WHERE id=$id";
$query = mysqli_query($db, $sql);
$maba = mysqli_fetch_assoc($query);

// jika data tidak ditemukan
if (mysqli_num_rows($query) < 1) {
    die("Data tidak ditemukan...");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Edit Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Form Edit Mahasiswa</h2>

    <form action="proses-edit.php" method="POST">

        <!-- id disembunyikan -->
        <input type="hidden" name="id" value="<?php echo $maba['id']; ?>" />

        <p>
            <label>Nama: </label>
            <input type="text" name="nama" value="<?php echo $maba['nama']; ?>" />
        </p>
        <p>
            <label>Alamat: </label>
            <textarea name="alamat"><?php echo $maba['alamat']; ?></textarea>
        </p>
        <p>
            <label>Jenis Kelamin: </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="Laki-laki" required
                <?php echo ($maba['jenis_kelamin'] == 'Laki-laki') ? 'checked' : ''; ?>>
                Laki-laki
            </label>
            <label>
                <input type="radio" name="jenis_kelamin" value="Perempuan" required
                <?php echo ($maba['jenis_kelamin'] == 'Perempuan') ? 'checked' : ''; ?>>
                Perempuan
            </label>
        </p>
        <p>
            <label>Agama: </label>
                <select name="agama">
                    <option value="Islam" <?php if($maba['agama']=="Islam") echo "selected"; ?>>Islam</option>
                    <option value="Kristen" <?php if($maba['agama']=="Kristen") echo "selected"; ?>>Kristen</option>
                    <option value="Hindu" <?php if($maba['agama']=="Hindu") echo "selected"; ?>>Hindu</option>
                    <option value="Budha" <?php if($maba['agama']=="Budha") echo "selected"; ?>>Budha</option>
                    <option value="Atheis" <?php if($maba['agama']=="Atheis") echo "selected"; ?>>Atheis</option>
                </select>

        </p>
        <p>
            <label>Asal Sekolah: </label>
            <input name="sekolah_asal" value="<?php echo $maba['sekolah_asal']; ?>" />
        </p>
        <p>
            <input type="submit" value="Simpan Perubahan" name="simpan" />
        </p>

    </form>

    <script src="script.js"></script>
</body>
</html>
