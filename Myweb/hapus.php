<?php 
    require 'connect.php';
    $hps = $_GET['npm'];

    if(hapus($hps) > 0) {
        echo "
                <script>
                    alert('Hapus Data Sukses');
                    document.location.href = 'index.php';
                </script>
            ";
    } else {
        echo "
        <script>
            alert('Hapus Data Gagal');
            document.location.href = 'index.php';
        </script>
    ";
    }

?>