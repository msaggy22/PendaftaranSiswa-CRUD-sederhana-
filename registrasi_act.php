<?php 
	include 'koneksi.php';

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$result = mysqli_query($koneksi, "INSERT INTO  tbl_siswa (`siswa_id`,`siswa_username`,`siswa_password`,`siswa_nama`,`siswa_email`) VALUES (null, '$user','$pass','$nama','$email')");

	if (!$result) {
		echo "
			<script>
				alert('Gagal menambah data...!');
				document.location.href = 'registrasi.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Berhasil menambah data...!');
				document.location.href = 'registrasi.php';
			</script>
			";
	}
 ?>