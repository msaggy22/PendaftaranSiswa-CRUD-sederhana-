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

    <!-- daftar siswa -->

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <table class="table table-bordered">
              <tr class="table-primary">
                <th style="text-align: center;">No</th>
                <th style="text-align: center;">Username</th>
                <th style="text-align: center;">Password</th>
                <th style="text-align: center;">Nama Lengkap</th>
                <th style="text-align: center;">Email</th>
                <th style="text-align: center;">Opsi</th>
              </tr>

              <?php 
              include 'koneksi.php';
              $no = 1;
              $sql = mysqli_query($koneksi, "SELECT * FROM tbl_siswa");
              while ($data = mysqli_fetch_array($sql)) {
              ?>
              <tr>
                <td align="center"><?php echo $no++ ?></td>
                <td align="left"><?php echo $data['siswa_username'] ?></td>
                <td align="center"><?php echo $data['siswa_password'] ?></td>
                <td align="left"><?php echo $data['siswa_nama'] ?></td>
                <td align="left"><?php echo $data['siswa_email'] ?></td>
                <td align="center">
                  <a href="edit_pendaftar.php?id=<?php echo $data['siswa_id']; ?>" class= "btn btn-primary btn-sm"><i class="bi bi-pencil-square"></i> Edit</a>
                  <a href="hapus_pendaftar.php?id=<?php echo $data['siswa_id']; ?>" onclick="return confirm('Yakin akan menghapus data?')" class= "btn btn-danger btn-sm"><i class="bi bi-trash"></i> Hapus</a>
                </td>
              </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>

    <!-- end daftar -->


    <div class="footer">
              <div class="container">
                <p>Copyright&copy <?php echo date('Y'); ?> <a href="index.php" >SMAN X JAKARTA</a></p>
                <p>Created by: Muhamad Saggy</p>
              </div>
            </div>
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>