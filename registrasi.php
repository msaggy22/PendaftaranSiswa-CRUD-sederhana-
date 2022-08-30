<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PPDB SMAN X JAKARTA</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>
  <body>
    
  <div class="top">
      <div class="container">
        <div class="row">
          <div class="col-md-1 mt-3">
            <img src="assets/img/tutwuri.png" width="90" height="auto" alt="logo">
          </div>
          <div class="col-md-11">
            <h4 class="mt-4">PENERIMAAN SISWA BARU ONLINE</h4>
            <h5>SMAN X JAKARTA </h5>
            <p class="almt">Jalan Merah Putih No. 17, Jakarta Timur, DKI Jakarta. HP 0852-xxxx-xxxx. email: info@smanxjkt.sch.id </p>
          </div>
        </div>
      </div>
    </div>

    <!-- navbar -->
    
    <div class="container">
  <nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" aria-current="page" href="index.php">Beranda</a>
        <a class="nav-link active" href="registrasi.php">Pendaftaran</a>
        <a class="nav-link" href="daftar_siswa.php">Daftar Siswa</a>
        <a class="nav-link" href="pengumuman.php">Pengumuman</a>
      </div>
    </div>
  </div>
    <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Cari</button>
    </form>
  </div>
  </nav>
</div>

    <!-- end navbar -->
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="box">
            <h6>INPUT DATA SISWA :</h6>
            <form class="well-shadow-sm" action="registrasi_act.php" method="POST">
              <div class="mb-3" class="input-group">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" id="exampleInputUsername" >
              </div>
              <div class="mb-3" class="input-group">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1">
              </div>
              <div class="mb-3" class="input-group">
                <label for="exampleInputNama" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" name="nama" id="exampleInputNama">
              </div>
              <div class="mb-3" class="input-group">
                <label for="exampleInputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail">
              </div>
              <button type="submit" class="btn btn-primary"><i class="bi bi-arrow-down-square"></i> Daftar</button>
              <button type="reset" class="btn btn-secondary"><i class="bi bi-arrow-clockwise"></i> Batal</button>

            </form>
          </div>
        </div>
        <div class="col-md-4">
          <div class="box">
          <form>
              <div class="mb-3">
                <label for="exampleInputUsername" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputUsername" aria-describedby="usernameHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <button type="submit" class="btn btn-success" name="masuk"><i class="bi bi-box-arrow-in-right"></i> Masuk</button>
              <button type="submit" class="btn btn-primary"><i class="bi bi-person-plus"></i> Daftar Baru</button>
          </form>
          <hr>
          <h6>Informasi Terkait</h6>
              <ul>
                <li><a href="#">Pendaftaran Siswa Baru Tahun Pelajaran 2022/2023</a></li>
                <li><a href="#">Syarat Pendaftaran Siswa Baru Tahun Pelajaran 2022/2023</a></li>
                <li><a href="#">Seleksi Administrasi Siswa Baru Tahun Pelajaran 2022/2023</a></li>
              </ul>
          </div>
          </div>
        </div>
    </div>
    <div class="footer">
          <div class="container">
            <p>Copyright&copy <?php echo date('Y'); ?> <a href="" >SMAN X JAKARTA</a></p>
            <p>Created by: Muhamad Saggy</p>
          </div>
        </div>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>