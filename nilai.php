<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Web Data Siswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="tugas.php">Sekolahan</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="jmlsiswa.php">Siswa<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="nilai.php">Nilai Siswa</a>
      </li>
    </ul>
    
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
    <!-- End Header -->

    <!-- Content -->
    <?php 
    if (isset($_POST['simpan'])) {
        $siswa = $_POST['jml'];

        for ($i = 0; $i < $siswa; $i++) {
            ?>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-8" style="padding:20px;">
                <div class="card border-primary">
                    <div class="card-header">Data Siswa</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Kelas</label>
                                <input type="text" name="kelas[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nilai Harian</label>
                                <input type="number" name="nh[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nilai UTS</label>
                                <input type="number" name="uts[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Nilai UAS</label>
                                <input type="number" name="uas[]" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block:" name="simpan">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php 
}
}
?>
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