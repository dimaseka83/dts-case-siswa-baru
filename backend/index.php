<?php 
    include('koneksi.php');

    // post
    if($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_SERVER['CONTENT_TYPE']) && $_SERVER['CONTENT_TYPE'] === 'application/json') {
        $json_data = file_get_contents('php://input');
        $data = json_decode($json_data, true);        
        
        if($data === null) {
            $response = array(
                'status' => 400,
                'message' => 'Data tidak boleh kosong.'
            );
        } else {
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $jenis_kelamin = $data['jenis_kelamin'];
            $agama = $data['agama'];
            $sekolah_asal = $data['sekolah_asal'];

            $sql = "INSERT INTO new_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";

            if (mysqli_query($conn, $sql)) {
                $response = array(
                    'status' => 200,
                    'message' => 'Data berhasil ditambahkan.'
                );
            } else {
                $response = array(
                    'status' => 500,
                    'message' => 'Internal Server Error.'
                );
            }
        }

        echo json_encode($response);
    }

    // get
    if($_SERVER['REQUEST_METHOD'] === 'GET') {
        $sql = "SELECT * FROM new_siswa";
        $result = mysqli_query($conn, $sql);
        $data = array();

        // show data when data is 0
        if (mysqli_num_rows($result) == 0) {
            $response = array(
                'status' => 200,
                'message' => 'Data kosong.',
                'data' => $data
            );
        } else if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }

            $response = array(
                'status' => 200,
                'message' => 'Data berhasil ditampilkan.',
                'data' => $data
            );
        } else {
            $response = array(
                'status' => 500,
                'message' => 'Internal Server Error.'
            );
        }

        echo json_encode($response);
    }

    $conn->close();
?>