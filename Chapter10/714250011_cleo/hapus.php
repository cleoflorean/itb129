<?php
include("config.php");

// cek apakah id ada di URL
if (isset($_GET['id'])) {

    // ambil id dari URL
    $id = $_GET['id'];

    // buat query hapus
    $sql = "DELETE FROM pendaftaran WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // apakah query berhasil?
    if ($query) {
        header('Location: list-maba.php?status=sukses');
    } else {
        header('Location: list-maba.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>
