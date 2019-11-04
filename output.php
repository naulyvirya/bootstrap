<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Penilaian Siswa</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body>
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

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12" style="padding:20px;">
                <center><h2>Data Penilaian Siswa</h2></center>
                <div class="table-responsive">
                <?php 
                if (isset($_POST['simpan'])) {
                    $nama = $_POST['nama'];
                    $kelas = $_POST['kelas'];
                    $nilai = $_POST['nh'];
                    $uts = $_POST['uts'];
                    $uas = $_POST['uas']
                    ?>
                    <table class="table">
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Nilai Harian</th>
                            <th>Nilai UTS</th>
                            <th>Nilai UAS</th>
                            <th>Nilai Akhir</th>
                            <th>Status</th>
                        </tr>
                    <?php 
                    foreach ($nama as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $nama[$key]; ?></td>
                            <td><?php echo $kelas[$key]; ?></td>
                            <td><?php echo $nilai[$key];
                                $nilai1 = $nilai[$key] * (60 / 100); ?></td>
                            <td><?php echo $uts[$key];
                                $uts1 = $uts[$key] * (20 / 100); ?></td>
                            <td><?php echo $uas[$key];
                                $uas1 = $uas[$key] * (20 / 100); ?></td>
                            <?php $nilaiakhir = $nilai1 + $uts1 + $uas1; ?>
                            <td><?php echo $nilaiakhir; ?></td>
                            <td><?php 
                                if ($nilaiakhir > 75) {
                                    echo "Lulus";
                                } else {
                                    echo "Remedial";
                                }
                                ?></td>
                        </tr>
                     <?php 
                }
            } ?>
                    </table>
                </div>
            </div>
        </div>    
    </div>
</body>
</html>