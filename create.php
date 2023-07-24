<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Siswa Baru</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center display-3">Formulir Pendaftaran Siswa Baru</h1>

    <form action="simpan.php" method="post">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nama</label>
            <input type="text" class="form-control" name="nama">
        </div>

        <div class="mb-3">
        <label for="">Jenis Kelamin</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" value='L' name="jenis_kelamin" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
                Laki-laki
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" value='P' name="jenis_kelamin" id="flexRadioDefault2">
            <label class="form-check-label" for="flexRadioDefault2">
                Perempuan
            </label>
        </div>
        </div>

        <div class="mb-3">
            <label for="">Agama</label>
            <select name="agama" id="" class="form-control">
                <option value="1">Islam</option>
                <option value="2">Kristen</option>
                <option value="3">Hindu</option>
                <option value="4">Budha</option>
            </select>
        </div>


        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" id="" cols="5" rows="5"></textarea>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Sekolah Asal</label>
            <input type="text" class="form-control" name="sekolah_asal">
        </div>


        <div class="d-flex">
            <div class="p-2 flex-grow-1">
                <a href="link.php" class="btn btn-danger">Kembali</a>
            </div>
            <div class="p-2">
                <button class="btn btn-primary" type="submit">Kirim</button>
            </div>
        </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>