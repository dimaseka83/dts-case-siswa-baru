<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <?php 
        function jenis_kelamin($kelamin) {
            if ($kelamin == 'L') {
                return 'Laki-laki';
            } else {
                return 'Perempuan';
            }
        }

        function agama($agama) {
            switch ($agama) {
                case 1:
                    return 'Islam';
                    break;
                
                case 2:
                    return 'Kristen';
                    break;

                case 3:
                    return 'Katolik';
                    break;

                case 4:
                    return 'Hindu';
                    break;

                case 5:
                    return 'Budha';
                    break;

                default:
                    return 'Lainnya';
                    break;
            }
        }
    ?>

    <div class="container mt-5">
        <h1 class="text-center display-2">Siswa Yang Sudah Mendaftar</h1>



        <div class="d-flex">
            <div class="p-2 flex-grow-1">
                <a href="create.php" class="btn btn-primary">Tambah Baru</a>
            </div>
            <div class="p-2">
            <?php 
                include("koneksi.php");
                $sql = "SELECT * FROM new_siswa";
                $dataSiswa = mysqli_query($conn, $sql);
                $total = mysqli_num_rows($dataSiswa);

                echo "<a>Total Siswa: ".$total."</a>";
            ?>
            </div>
        </div>

        <table class="table pt-1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Agama</th>
                    <th>Sekolah Asal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php 
            include("koneksi.php");

            $sql = "SELECT * FROM new_siswa";
            $query = mysqli_query($conn, $sql);

            foreach ($query as $key => $value) {
                echo "<tr>";
                echo "<td>".($key + 1)."</td>";
                echo "<td>".$value['nama']."</td>";
                echo "<td>".$value['alamat']."</td>";
                echo "<td>".jenis_kelamin($value['jenis_kelamin'])."</td>";
                echo "<td>".agama($value['agama'])."</td>";
                echo "<td>".$value['sekolah_asal']."</td>";
                echo "<td>";
                echo "<a href='edit.php?id=".$value['id']."' class='btn btn-warning'>Edit</a>";
                echo "<a href='delete.php?id=".$value['id']."' class='btn btn-danger'>Hapus</a>";
                echo "</td>";
                echo "</tr>";
            }

            ?>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>