<?php 
    require 'connect.php';

    if(isset($_POST["tombol"])) {
        if(tambah($_POST) > 0) {
            echo "
                <script>
                    alert('Tambah Data Sukses');
                    document.location.href = 'index.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('Tambah Data Gagal');
                    document.location.href = 'input.php';
                </script>
                
            ";

            //var_dump(mysqli_error($conn));
        }
    }
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>Hello, world!</title>
</head>

<body>






    <!-- Mulai -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">DATABASE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">TAMPIL DATA <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="input.php">INPUT DATA <span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h2 class="h2 alert alert-info mt-5 mb-2 text-center">INPUT DATA ANDA</h2>
        <form action="" method="post">
            <div class="alert bg-dark mt-2">
                <div class="input-group flex-nowrap col-md-8 offset-md-2 mt-2 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning" id="addon-wrapping"><b>Nama</b></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Masukan nama anda..." aria-label="Username"
                        aria-describedby="addon-wrapping" name="nama" autocomplete="off">
                </div>
                <div class="input-group flex-nowrap col-md-8 offset-md-2 mt-5 ">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning" id="addon-wrapping"><b>NPM</b></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Masukan npm anda..." aria-label="Username"
                        aria-describedby="addon-wrapping" name="npm" autocomplete="off">
                </div>
                <div class="input-group flex-nowarp col-md-8 offset-md-2 mt-5">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-warning" id="addon-wraping"><b>Jurusan</b></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Masukan jurusan anda..." aria-label="Username"
                        aria-describedby="addon-wrapping" name="jurusan" autocomplete="off">
                </div>
                <div class="text-center">
                    <button type="submit" name="tombol" class="btn btn-success mt-3">SUBMIT</button>
                    <button type="reset" class="btn btn-danger mt-3">RESET</button>
                </div>
            </div>
        </form>
    </div>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
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