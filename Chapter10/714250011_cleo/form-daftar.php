<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.6">
    <title>Pendaftaran Mahasiswa Baru | POLTEKPOS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h3>Formulir Pendaftaran Mahasiswa Baru | POLTEKPOS</h3>
    </header>

    <form action="proses-pendaftaran.php" method="POST">
        <fieldset>
        <p>
            <label for="nama">Nama: </label>
            <input type="text" name="nama" placeholder="Nama lengkap"/>
        <p>
            <label for="alamat">Alamat: </label>
            <textarea name="alamat"  placeholder="Alamat anda"></textarea>
        </p>
        <p>
            <label for="jenis_kelamin">Jenis kelamin: </label>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki</label>
            <label><input type="radio" name="jenis_kelamin" value="perempuan">Perempuan</label>

        <p>
            <label for="agama">Agama: </label>
            <select name="agama">
                <option>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Atheis</option>
            </select>
        
        </p>
        <p>
            <label for="sekolah_asal">Sekolah Asal: </label>
            <textarea name="sekolah_asal" placeholder="Nama sekolah"></textarea>
        </p>
        <p>
        <input type="submit" value="Daftar" name="daftar"/>
        </p>
    </form>

<script src="script.js"></script>
</body>
</html>