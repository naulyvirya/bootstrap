<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 1</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="latihan1.php">Bang</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="latihan1.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="raport.php">Raport</a>
      </li>
    </ul>
    
    
  </div>
</nav>
    <!-- End Header -->

    <!-- Content -->
    <div class="container-fluid">
        <div class="row justify-content-left">
            <div class="col-md-6" style="padding:20px;">
                <div class="card border-primary">
                    <div class="card-header">Raport</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label for="">Nama</label>
                                <input type="text" name="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="">Kelas</label>
                                <input type="text" name="kelas" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block:" name="simpan">Simpan</button>
                            </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="padding:20px;">
                <center><h2>Output</h2></center>
                <?php
                    if(isset($_POST['simpan'])){
                        $a = $_POST['nama'];
                        $b = $_POST['kelas'];
                    }
                ?>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                        </tr>
                        <tr>
                            <td><?php echo $a; ?></td>
                            <td><?php echo $b; ?></td>
                        </tr>
                    </table>
            </div>
        </div>
    </div>
    <!-- End Content -->

    <!-- Footer -->
    <footer>
      <center>&copy; 2019 SMK Assalaam Bandung</center>
    </footer>
    <!-- End Footer -->

    <!-- JS -->
    <script src="assets/js/jquery-3.4.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.js"></script>
    <!-- End JS -->
</body>
</html>