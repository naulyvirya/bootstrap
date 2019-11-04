<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Data Siswa ~ Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <!-- End Header -->

    <!-- Content -->
    <h2>Login First.</h2>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10" style="padding:20px;">
                <div class="card border-primary">
                    <div class="card-header">Login</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Username</label> 
                                <input type="text" name="user" class="form-control" require>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass" class="form-control" require>
                            </div>
                                <button class="btn btn-primary btn-block:" name="login">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    if (isset($_POST['login'])) {
        $a = $_POST['user'];
        $b = $_POST['pass'];

        if ($a == "admin" && $b == "12345") {
            $_SESSION['login'] = $a;
            echo "<script>alert('Anda Berhasil Login'); window.location.href='tugas.php'</script>";
        } else {
            echo "<script>alert('Username atau Password Anda Salah!');</script>";
        }
    }
    ?>
    <!-- End Content -->

    <!-- Footer -->
    <!-- End Footer -->

    <!-- JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>
</html>