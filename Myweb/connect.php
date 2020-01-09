<?php 
    $conn = mysqli_connect("localhost", "root", "","tugas");

    function query($query) {
        global $conn;
        $result = mysqli_query($conn, $query);
        $rows = [];
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function cari($keyword) {
        global $conn;
        query($query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%';");

            return query($query);
    }

    function tambah($hasil) {
        global $conn;

        $nama = htmlspecialchars($hasil['nama']);
        $npm = htmlspecialchars($hasil['npm']);
        $jurusan = htmlspecialchars($hasil['jurusan']);

        $query = "INSERT INTO mahasiswa VALUES('', '$nama', '$npm', '$jurusan')";
        $result = mysqli_query($conn, $query);

        $cek = mysqli_affected_rows($conn);
        return $cek;
    }

    function hapus($hps) {
        global $conn;

        $query = "DELETE FROM mahasiswa WHERE npm='$hps'";
        
        mysqli_query($conn, $query);
        $cek = mysqli_affected_rows($conn);

        return $cek;
    }

    function update($ubah) {
        global $conn;

        $id = htmlspecialchars($ubah['id']);
        $nama = htmlspecialchars($ubah['nama']);
        $npm = htmlspecialchars($ubah['npm']);
        $jurusan = htmlspecialchars($ubah['jurusan']);

        $query = "UPDATE mahasiswa SET nama='$nama', npm='$npm', jurusan='$jurusan' WHERE id = $id";
        $result = mysqli_query($conn,$query);

        $cek = mysqli_affected_rows($conn);

        return $cek;
    }
?>