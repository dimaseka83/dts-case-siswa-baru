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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <h1 class="text-center display-3">Formulir Edit Siswa <?php echo $data['nama']; ?></h1>

        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $data['id']; ?>">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama']; ?>">
            </div>

            <div class="mb-3">
                <label for="">Jenis Kelamin</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='L' name="jenis_kelamin" id="flexRadioDefault1" <?php echo ($data['jenis_kelamin'] == 'L') ? "checked": "" ?>>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='P' name="jenis_kelamin" id="flexRadioDefault2" <?php echo ($data['jenis_kelamin'] == 'P') ? "checked": "" ?>>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                    </label>
                </div>
            </div>

            <div class="mb-3">
            <label for="">Agama</label>
                <select name="agama" id="" class="form-control">
                    <option value="1" <?php echo ($data['agama'] == '1') ? "selected": "" ?>>Islam</option>
                    <option value="2" <?php echo ($data['agama'] == '2') ? "selected": "" ?>>Kristen</option>
                    <option value="3" <?php echo ($data['agama'] == '3') ? "selected": "" ?>>Hindu</option>
                    <option value="4" <?php echo ($data['agama'] == '4') ? "selected": "" ?>>Budha</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" id="" cols="5" rows="5"><?php echo $data['alamat']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Sekolah Asal</label>
                <input type="text" class="form-control" name="sekolah_asal" value="<?php echo $data['sekolah_asal']; ?>">
            </div>

            <div class="d-flex">
                <div class="p-2 flex-grow-1">
                    <a href="list.php" class="btn btn-danger">Kembali</a>
                </div>
                <div class="p-2">
                    <button class="btn btn-primary" type="submit">Kirim</button>
                </div>
            </div>
        </form>
    </div>

    </form>
</body>
</html>