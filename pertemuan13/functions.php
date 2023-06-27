<?php 
    // Koneksi ke database
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data) {
        global $conn;

        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        
        // Upload gambar
        $gambar = upload();
        if (!$gambar) {
            return false;
        }

        // Query insert data
        $query = "INSERT INTO mahasiswa
                    VALUES
                    ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Upload gambar
    function upload() {
        $namaFile = $_FILES['gambar']['name'];
        $ukuranFile = $_FILES['gambar']['size'];
        $error = $_FILES['gambar']['error'];
        $tmpName = $_FILES['gambar']['tmp_name'];

        // Cek apakah tidak ada gambar yang di-upload
        if ($error === 4) {
            echo "<script>
                    alert('Pilih gambar terlebih dahulu');
                  </script>";
            return false;
        }

        // Cek apakah yang di-upload adalah gambar
        $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
        $ekstensiGambar = explode('.', $namaFile);
        $ekstensiGambar = strtolower(end($ekstensiGambar));
        if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
            echo "<script>
                    alert('yang anda upload bukan gambar!');
                  </script>";
            return false;
        }

        // Cek jika ukurannya terlalu besar
        if ($ukuranFile > 1000000) { // 1 MB (dalam bytes)
            echo "<script>
                    alert('ukuran gambar terlalu besar!');
                  </script>";
            return false;
        }

        // Lolos pengecekan, maka gambar siap di-upload
        // Gambarnya disimpan lokal, bukan di database
        // yang di database hanya nama file-nya saja

        // Generate nama gambar baru (random)
        $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

        move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
        
        return $namaFileBaru;
    }

    function hapus_file_gambar($id) {
        // Hapus file gambar di folder lokal
        $namaFile = query("SELECT gambar FROM mahasiswa WHERE id = $id")[0]["gambar"];
        
        if(!unlink('img/' . $namaFile)) {
            echo "<script>
                    alert('gagal menghapus gambar!');
                  </script>";
            return false;
        }
        return true;
    }

    function hapus($id) {
        global $conn;

        // Hapus file
        if (!hapus_file_gambar($id)) {
            return false;
        }
        
        // Hapus di database
        $query = "DELETE FROM mahasiswa WHERE id = $id";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function ubah($data) {
        global $conn;

        $id = $data["id"];
        $nim = htmlspecialchars($data["nim"]);
        $nama = htmlspecialchars($data["nama"]);
        $email = htmlspecialchars($data["email"]);
        $jurusan = htmlspecialchars($data["jurusan"]);
        
        $gambarLama = htmlspecialchars($data["gambarLama"]); 
        // gak pake specialchars sebenarnya gk papa, karena bukan dari user

        // Cek apakah user pilih gambar baru atau tidak
        if ($_FILES['gambar']['error'] === 4) {
            $gambar = $gambarLama;
        } else {
            // Hapus file gambar lama
            if (!hapus_file_gambar($id)) {
                return false;
            }
            $gambar = upload();
        }

        // Query update data
        $query = "UPDATE mahasiswa 
                    SET 
                    nim = '$nim',
                    nama = '$nama',
                    email = '$email',
                    jurusan = '$jurusan',
                    gambar = '$gambar'
                    WHERE id = $id
                ";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($keyword) {
        $query = "SELECT * FROM mahasiswa
                    WHERE
                    nama LIKE '%$keyword%' OR
                    nim LIKE '%$keyword%' OR
                    email LIKE '%$keyword%' OR
                    jurusan LIKE '%$keyword%'
                ";
        return query($query);
    }
?>