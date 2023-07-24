<?php 
include 'koneksi.php';
$id = $_GET['id'];
$sql = "SELECT * FROM new_siswa WHERE id=$id";
$query = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Siswa</title>
</head>
<body>
    <h1>
        Formulir Edit Siswa <?php echo $data['nama']; ?>
    </h1>

    <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

    <label for="">Nama</label>
    <input type="text" name="nama" value="<?php echo $data['nama']; ?>" id="">

    <label for="">Alamat</label>
    <input type="text" name="alamat" value="<?php echo $data['alamat']; ?>" id="">

    <label for="">Jenis Kelamin</label>
    <input type="radio" name="jenis_kelamin" id="" value='L' <?php echo ($data['jenis_kelamin'] == 'L') ? "checked": "" ?>> Laki-laki
    <input type="radio" name="jenis_kelamin" id="" value='P' <?php echo ($data['jenis_kelamin'] == 'P') ? "checked": "" ?>> Perempuan

    <label for="">Agama</label>
    <select name="agama" id="">
        <option value="1" <?php echo ($data['agama'] == '1') ? "selected": "" ?>>Islam</option>
        <option value="2" <?php echo ($data['agama'] == '2') ? "selected": "" ?>>Kristen</option>
        <option value="3" <?php echo ($data['agama'] == '3') ? "selected": "" ?>>Hindu</option>
        <option value="4" <?php echo ($data['agama'] == '4') ? "selected": "" ?>>Budha</option>
    </select>

    <label for="">Sekolah Asal</label>
    <input type="text" name="sekolah_asal" id="" value="<?php echo $data['sekolah_asal']; ?>">

    <input type="submit" value="Daftar" name="daftar">
    </form>
</body>
</html>