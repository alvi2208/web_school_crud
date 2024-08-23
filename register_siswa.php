<?php

require 'config/config.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>PPDB SMA Digitalent</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.3/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="../stylesheet" href="swalert/sweetalert2.min.css">
    <script src="./swalert/sweetalert2.min.js"></script>
    <script src="./swalert/sweetalert2.all.min.js"></script>
</head>

<body>

    <section class="vh-100" style="background-color: #3795BD;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col col-xl-10">
                    <div class="card" style="border-radius: 1rem;">
                        <div class="row g-0">
                            <div class="col-md-6 col-lg-5 d-none d-md-block mt-2">
                                <img src="https://banjoo.id/asset/client/dts-OA3/images/person3.png" alt="login form" class="img-fluid mt-5 ml-5" style="border-radius: 1rem 0 0 1rem;" />
                            </div>
                            <div class="col-md-6 col-lg-7 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">

                                    <form method="POST">
                                        <div class="d-flex align-items-center mb-3 pb-1">
                                            <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                                            <span class="h1 fw-bold mb-0">VSGA 2023</span>
                                        </div>

                                        <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Register Siswa - SMA Digitalent</h5>

                                        <div class="form-outline mb-4">
                                            <label class="form-label">Username</label>
                                            <input type="text" name="user" placeholder="Username" class="form-control form-control-lg" />
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label class="form-label">Password</label>
                                            <input type="password" name="pass" placeholder="Password" class="form-control form-control-lg" />
                                        </div>

                                        <div class="pt-1 mb-4">
                                            <button type="submit" name="submit" class="btn btn-dark btn-lg btn-block">Register</button>
                                        </div>
                                        <p class="pb-lg-2" style="color: #393f81;">Have an account? <a href="login_siswa.php" style="color: #393f81;">Login here</a></p>
                                    </form>


                                    <?php

                                    if (isset($_POST['submit'])) {
                                        $user = $_POST['user'];
                                        // $pass = md5($_POST['pass']);
                                        $pass = ($_POST['pass']);
                                        $query2 = $conn->query("INSERT INTO tb_user (username, password) VALUES('$user', '$pass')");
                                        if ($query2) {
                                    ?>
                                            <script type="text/javascript">
                                                Swal.fire({
                                                    // position: 'top-end',
                                                    icon: 'success',
                                                    title: 'Registrasi Berhasil',
                                                    showConfirmButton: false,
                                                    timer: 1500
                                                });
                                                setInterval(() => {
                                                    window.location.href = "login_siswa.php";
                                                }, 1500);
                                            </script>
                                        <?php
                                        } else {
                                        ?>
                                            <script type="text/javascript">
                                                alert("Gagal");
                                                // document.location = '?halaman=tampilMhs';
                                            </script>
                                    <?php
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