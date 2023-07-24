<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftar</title>
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

    <h1>Siswa Yang Sudah Mendaftar</h1>

    <a href="create.php">Tambah Baru</a>
<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
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
        echo "</tr>";
    }

    ?>
    </tbody>
</table>
    
</body>
</html>