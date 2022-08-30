<?php 
	include 'koneksi.php';
	$id = $_GET['id'];

	$hapus = mysqli_query($koneksi, "DELETE FROM tbl_siswa where siswa_id = '$id'");

	if (!$hapus) {
		echo '<script>alert("Gagal mmenghapus data")</script>';
	} else {
		echo '<script>alert("Data berhasi dihapus")</script>';
		header('location:daftar_siswa.php');
	}
 ?>