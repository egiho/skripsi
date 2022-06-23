<?php
include ("config.php");
// cek apakah tombol submit sudah di klik atau blum?
if(isset($_POST['submit'])) {
	// ambil data dari formulir
	$nama 	= $_POST['nama'];
	$user 	= $_POST['user'];
	$hp 	= $_POST['hp'];
	$email 	= $_POST['email'];
	$alamat = $_POST['alamat'];

	// buat query
	$sql = "INSERT INTO profile (nama, user, hp, email, alamat) VALUE ('nama', 'user', 'hp', 'email', 'alamat')";
	$update = mysqli_query("$db", "$sql");

	// apakah update profile berhasil?
	if( $query ) {
		// kalau berhasil ubah data berhasil dengan status=sukses
		header('Location: profile.php?status=sukses');
	}else {
		// kalau gagal alihkan ke halaman profile.php dengan status=gagal
		header('Location: profile.php?status=gagal');

	}
}else {
	die("Akses dilarang...");
}


?>


<?php
include ("login.php");
// cek apakah tombol Ubah Password sudah di klik atau blum?
if(isset($_POST['Ubah Password'])) {
	// ambil data dari formulir
	$pass1	= $_POST['pass1'];
	$pass2 	= $_POST['pass2'];

	// buat query
	$sql = "INSERT INTO profile (pass1, pass2) VALUE ('pass1', 'pass2')";
	$query = mysqli_query($db, $sql);

	// apakah update profile berhasil?
	if( $query ) {
		// kalau berhasil ubah data berhasil dengan status=sukses
		header('Location: profile.php?status=sukses');
	}else {
		// kalau gagal alihkan ke halaman profile.php dengan status=gagal
		header('Location: profile.php?status=gagal');

	}
}else {
	die("Akses dilarang...");
}


?>


