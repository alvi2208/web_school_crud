<?php
require 'config/config.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>PSB SMA Digitalent</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        table {
            width: 100%;
        }

        nav a:hover {
            background-color: #f0ad4e;
            color: black !important;
        }
    </style>
    <link rel="../stylesheet" href="swalert/sweetalert2.min.css">
    <script src="./swalert/sweetalert2.min.js"></script>
    <script src="./swalert/sweetalert2.all.min.js"></script>
    <link rel='shortcut icon' href='assets/images/icon.png'>
</head>

<body class="d-flex flex-column min-vh-100">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #3795BD;">
            <div class=" container">
                <img src="https://balitbangsdm.kominfo.go.id/upt/makassar/uploads/pages/20220525062518-Logo-Kominfo.png" width="35" height="35" alt="" class="mr-2">
                <a class="navbar-brand pr-2 pl-2" href="index.php" style="font-size: 22px;">Home</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <?php
                        if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
                            echo "";
                        } else {
                            echo '<html><li class="nav-item active">
                                <a class="nav-link" href="?halaman=tambahSiswa" style="font-size: 20px;">Pendaftaran<span class="sr-only">(current)</span></a>
                            </li></html>';
                        }
                        ?>



                        <?php if (!isset($_SESSION['admin'])) {
                            echo '';
                        } else {
                            echo '<html> <li class="nav-item active">
                            <a class="nav-link ml-2" href="?halaman=tampilSiswa" style="font-size: 20px;">Data Siswa <span class="sr-only">(current)</span></a>
                        </li></html>';
                        } ?>
                    </ul>
                    <div class="nav-item my-2 my-lg-0 text-white">
                        <label style="font-size: 20px;">
                            <?php if (isset($_SESSION['admin'])) {
                                echo "🙋";
                                echo $_SESSION['admin'];
                            } elseif (isset($_SESSION['user'])) {
                                echo "🙋";
                                echo $_SESSION['user'];
                            } else {
                                echo "";
                            } ?></label>

                        <?php if (!isset($_SESSION['admin']) && !isset($_SESSION['user'])) {
                            echo '<html><a href="login_siswa.php" class="btn btn-warning my-2 my-sm-0 ml-3" style="font-size: 18px;">Login</a></html>';
                        } else {
                            echo '<html><a href="logout.php" class="btn btn-warning my-2 my-sm-0 ml-3" style="font-size: 18px;">Logout</a></html>';
                        } ?>
                        
                    </div>
                </div>

            </div>
        </nav>
    </header>
    <br>
    <main>
        <div class="container">
            <?php
            error_reporting(E_ALL ^ (E_WARNING | E_NOTICE));
            switch ($_GET['halaman']) {

                    //Siswa
                case 'tampilSiswa':
                    include 'pages/siswa_tampil.php';
                    break;
                case 'tambahSiswa':
                    include 'pages/siswa_tambah.php';
                    break;
                case 'editSiswa':
                    include 'pages/siswa_edit.php';
                    break;
                case 'detailSiswa':
                    include 'pages/siswa_detail.php';
                    break;
                case 'hapusSiswa':
                    include 'pages/siswa_hapus.php';
                    break;


                default:
            ?>

                    <div class="text-center">
                        <?php
                        $data_siswa = $conn->query("SELECT * FROM tb_siswa");
                        $jumlah_siswa = mysqli_num_rows($data_siswa);
                       

                        if (isset($_SESSION['admin'])) {
                            echo "<h3>Selamat Datang, Admin</h3>
                            <h5>Jumlah Pendaftar saat ini : <span style='color: blue; font-weight:bold'>$jumlah_siswa Calon Siswa Baru</span></h5>";
                        } elseif (isset($_SESSION['user'])) {
                            echo "<h3>Selamat Datang, Calon Siswa Baru</h3>
                            <h4><h4>Klik menu <span style='color:blue; font-weight:bold'>Pendaftaran </span>untuk Registrasi</h4></h4>";
                        } else {
                            echo "<h3>Selamat Datang, Calon Siswa Baru</h3>
                            <h4>Silahkan <span style='font-weight:bold'><a href='register_siswa.php'>Buat Akun </a></span>terlebih dahulu, atau Login apabila sudah punya</h4>";
                        }



                     
                        ?>


                    </div>



                    <section class="container w-75 h-50">

                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="2500">
                            <ol class="carousel-indicators">
                                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner ">
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="./assets/images/tiga.jpg" alt="First slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./assets/images/satu.jpg" alt="Second slide">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="./assets/images/dua.jpg" alt="Third slide">
                                </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </section>
            <?php
                    break;
            }
            ?>
        </div>


    </main>

    <!-- Footer -->
    <footer class="text-center text-lg-start text-white mt-auto" style="background-color: #3795BD;">
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            Junior Web Developer © 2023 Copyright:
            <a class="text-reset fw-bold" href="">I Gede Arya Danny Pratama</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#example1').DataTable();
        });
    </script>
</body>

</html>
