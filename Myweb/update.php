<?php 
    require 'connect.php';
    $npm = $_GET["npm"];

    $mhs = query("SELECT * FROM mahasiswa WHERE npm='$npm'")[0];

    if (isset($_POST["tombol"])) {
        if(update($_POST) > 0) {
            echo "
            <script>
                alert('DATA BERHASIL DIUBAH !!!');
                document.location.href = 'index.php';
            </script>
        ";
        
        } else {
        echo "
            <script>
                alert('DATA GAGAL DIUBAH !!!');
                document.location.href = 'index.php';
            </script>
        ";
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Update Data</title>
</head>

<body>
    <div class="container">
        <h2 class="h2 alert alert-info mt-5 mb-2 text-center">UBAH DATA ANDA</h2>
        <form action="" method="post">
            <div class="alert bg-dark mt-2">
                <div class="input-group flex-nowrap col-md-8 offset-md-2 mt-3 ">

                    <input type="hidden" class="form-control" placeholder="Masukan nama anda..." aria-label="Username"
                        aria-describedby="addon-wrapping" name="id" autocomplete="off" value="<?= $mhs['id'];?>">
                </div>
                <div class="input-group flex-nowrap col-md-8 offset-md-2 mt-4 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning" id="addon-wrapping"><b>Nama</b></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Masukan nama anda..." aria-label="Username"
                        aria-describedby="addon-wrapping" name="nama" autocomplete="off" value="<?= $mhs['nama'];?>">
                </div>
                <div class="input-group flex-nowrap col-md-8 offset-md-2 mt-4 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning" id="addon-wrapping"><b>NPM</b></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Masukan npm anda..." aria-label="Username"
                        aria-describedby="addon-wrapping" name="npm" autocomplete="off" value="<?= $mhs['npm'];?>">
                </div>
                <div class=" input-group flex-nowarp col-md-8 offset-md-2 mt-4">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning" id="addon-wraping"><b>Jurusan</b></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Masukan jurusan anda..." aria-label="Username"
                        aria-describedby="addon-wrapping" name="jurusan" autocomplete="off"
                        value="<?= $mhs['jurusan'];?>">
                </div>
                <div class=" text-center">
                    <button type="submit" name="tombol" class="btn btn-success mt-3">SUBMIT</button>
                    <button type="reset" class="btn btn-danger mt-3">RESET</button>
                </div>
            </div>
        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>


</html>