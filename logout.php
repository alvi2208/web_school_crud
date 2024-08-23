<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PSB SMA DIGITALENT</title>
    <link rel="../stylesheet" href="swalert/sweetalert2.min.css">
    <script src="./swalert/sweetalert2.min.js"></script>
    <script src="./swalert/sweetalert2.all.min.js"></script>
</head>

<body>
    <?php
    session_start();
    //menghancurkan $_SESSION["admin"]
    //session_destroy();
    unset($_SESSION["admin"]);
    unset($_SESSION["user"]);
    echo "<script>Swal.fire('Anda Berhasil Logout');</script>";
    // echo "<script>location='login.php';</script>";
    ?>
    <script>
        setInterval(() => {
            window.location.href = "index.php";
        }, 1000);
    </script>
</body>

</html>