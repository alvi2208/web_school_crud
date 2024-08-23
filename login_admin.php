<?php

require 'config/config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>PSB SMA Digitalent</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="../stylesheet" href="swalert/sweetalert2.min.css">
    <script src="./swalert/sweetalert2.min.js"></script>
    <script src="./swalert/sweetalert2.all.min.js"></script>
</head>

<body>

    <section class="vh-100" style="background-color: #f0ad4e;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <!-- <div class="col-md-6 col-lg-5 d-none d-md-block mt-4">
                                <img src="https://banjoo.id/asset/client/dts-OA3/images/person4.png" alt="login form" class="img-fluid mt-5 ml-5" style="border-radius: 1rem 0 0 1rem;" />
                            </div> -->
                            <div class="col-md-6 col-lg-5 d-none d-md-block mt-4 p-3">
                                <img src=" https://banjoo.id/asset/client/dts-OA3/images/home-banner.png" alt="login form" class="img-fluid mt-5 ml-5" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST">

                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">VSGA 2023</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Login Admin - SMA Digitalent</h5>

                                        <div class="form-outline mb-4">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="username" placeholder="Username" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="password" placeholder="Password" class="form-control form-control-lg" />
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Login</button>
                                        </div>
                                        <!-- <p class="pb-lg-2" style="color: #393f81;">Don't have an account? <a href="register.php" style="color: #393f81;">Register here</a></p> -->
                                    </form>
                                    <?php

                                    if (isset($_POST['submit'])) {

                                        $username = $_POST['username'];
                                        // $pass = md5($_POST['pass']);
                                        $password = ($_POST['password']);

                                        $query = $conn->query("SELECT username FROM tb_admin WHERE username = '$username' AND password = '$password' ");
                                        $akunygcocok = $query->num_rows;
                                        if ($akunygcocok == 1) {

                                            $ambil = $query->fetch_assoc();
                                            $_SESSION['admin'] = $ambil['username'];
                                            // echo "<script>alert('anda sukses login');</script>";
                                            echo "<script>location='index.php';</script>";
                                        } else {
                                            echo '<script>Swal.fire("Login Gagal", "Username atau password Anda salah", "error")</script>';
                                            // echo "<script>location='login.php';</script>";
                                        }
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- <div class="container">
		<div class="col-lg-6">
			<div class="card">
				<div class="card-header">
					Login Administrator
				</div>
				<div class="card-body">
					<form method="POST">
						<div class="form-group">
							<label>Username</label>
							<input type="text" name="user" class="form-control" placeholder="Password">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="pass" class="form-control" placeholder="Password">
						</div>
						<button type="submit" name="submit" class="btn btn-primary">Submit</button>
					</form>
					
				</div>
			</div>
		</div>
	</div> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>

</html>