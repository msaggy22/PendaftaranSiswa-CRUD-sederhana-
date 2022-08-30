<?php 
	include 'koneksi.php';

	$id = $_POST['id'];
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$nama = $_POST['nama'];
	$email = $_POST['email'];

	$result = mysqli_query($koneksi, "UPDATE tbl_siswa SET
	siswa_username = '$user',
	siswa_password = '$pass',
	siswa_nama = '$nama',
	siswa_email = '$email'
	WHERE siswa_id = $id
	");
	if (!$result) {
		echo "
			<script>
				alert('Gagal mengubah data...!');
				document.location.href = 'daftar_siswa.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Berhasil mengubah data...!');
				document.location.href = 'daftar_siswa.php';
			</script>
			";
	}
 ?>