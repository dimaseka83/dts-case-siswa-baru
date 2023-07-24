<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa Baru</title>
</head>
<body>
    <h1>Formulir Pendaftaran Siswa Baru</h1>
    <form action="simpan.php" method="post">
    <label for="">Nama</label>
    <input type="text" name="nama" id="">

    <label for="">Alamat</label>
    <input type="text" name="alamat" id="">

    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" id="" value='L'> Laki-laki
    <input type="radio" name="jenis_kelamin" id="" value='P'> Perempuan

    <label for="">Agama</label>
    <select name="agama" id="">
        <option value="1">Islam</option>
        <option value="2">Kristen</option>
        <option value="3">Hindu</option>
        <option value="4">Budha</option>
    </select>

    <label for="">Sekolah Asal</label>
    <input type="text" name="sekolah_asal" id="">

    <input type="submit" value="Daftar" name="daftar">
    </form>
</body>
</html>