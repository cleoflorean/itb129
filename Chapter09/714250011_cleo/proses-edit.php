<?php
include("config.php");

// cek apakah tombol simpan ditekan
if (isset($_POST['simpan'])) {

    // ambil data dari form
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = isset($_POST['jenis_kelamin'])
    ? $_POST['jenis_kelamin']
    : '';
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah_asal'];

    // query update
    $sql = "UPDATE pendaftaran SET 
            nama='$nama',
            alamat='$alamat',
            jenis_kelamin='$jenis_kelamin',
            agama='$agama',
            sekolah_asal='$sekolah'
            WHERE id=$id";

    $query = mysqli_query($db, $sql);

    // cek berhasil atau tidak
    if ($query) {
        header('Location: list-maba.php?status=sukses');
    } else {
        header('Location: list-maba.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>
