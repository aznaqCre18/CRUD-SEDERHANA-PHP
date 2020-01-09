<?php 
    require "connect.php";
    $mahasiswa = query("SELECT * FROM mahasiswa;");

    if(isset($_POST["tombol"])) {
        $mahasiswa = cari($_POST["keyword"]);
    }
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">DATABASE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">TAMPIL DATA</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="input.php">INPUT DATA <span class="sr-only">(current)</span></a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="POST" action="">
                <input class="form-control mr-sm-2" name="keyword" type="search" placeholder="Search"
                    aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="tombol">Search</button>
            </form>

        </div>
    </nav>
    <div class="container mt-5">
        <table class="table table-hover table-dark table-striped rounded text-center">


            <tr class="bg-primary rounded">
                <th>No</th>
                <th>Nama</th>
                <th>NPM</th>
                <th>Jurusan</th>
                <th>Perintah</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $mhs['nama'];?></td>
                <td><?= $mhs['npm'];?></td>
                <td><?= $mhs['jurusan'];?></td>
                <td>
                    <a href="update.php?npm=<?= $mhs['npm'];?>" class="btn btn-primary btn-sm">Edit</a>
                    <a href="hapus.php?npm=<?= $mhs['npm'];?>" class="btn btn-danger btn-sm" name>Hapus</a>
                </td>
            </tr>
            <?php $i++;?>
            <?php endforeach;?>

        </table>
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