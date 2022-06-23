<?php
 session_start();
 include 'config.php';

 // set session
 if($_SESSION['status_login'] != true){
 	echo '<script>window.location="index.php"</script>';
 }
 $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."' ");
 $d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charsset="utf=8">
	<meta name="viewport" content="width=device-width, initial=scale=1">
	<title>Juntak Star</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"><script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <style type="text/css">
<!--
.style1 {color: #FFFF00}
-->
    </style>
</head>
<body>
	<! -- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>
	<!-- header -->
	<div class="medsos">
		<div class="container">
			<ul>
				<li><a href="#"><i class="fab fa-facebook"></i></a></li>
				<li><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
				<li><a href="#"><i class="fas fa-envelope"></i></li>
				<li><a href="#"><i class="fab fa-youtube"></i></a></li>
				<li><a href="#"><i class="fab fa-twitter"></i></a></li>
			</ul>
		</div>
	</div>
	</div>
<!-- content -->
	<div class="section">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<div class="container">
			<h3>FROFILE</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Lengkap" class="input-control" value="<?php echo $d->admin_name ?>" required>
					<input type="text" name="user" placeholder="Username" class="input-control" value="<?php echo $d->username ?>"  required>
					<input type="text" name="hp" placeholder="No hp" class="input-control" value="<?php echo $d->admin_telp ?>"  required>
					<input type="email" name="email" placeholder="Email" class="input-control" value="<?php echo $d->admin_email ?>"  required>
					<input type="text" name="alamat" placeholder="Alamat" class="input-control" value="<?php echo $d->admin_adress ?>"  required>
					<input type="submit" name="submit" value="Ubah Frofile" class="btn">

				</form>
				<?php
					if(isset($_POST['submit'])){
						$nama 	= ucwords($_POST['nama']);
						$user 	= $_POST['user'];
						$hp 	= $_POST['hp'];
						$email 	= $_POST['email'];
						$alamat = ucwords($_POST['alamat']);

						$update = mysqli_query($conn, "UPDATE tb_admin SET 
										admin_name = '".$nama."',
										username = '".$user."',
										admin_telp = '".$hp."',
										admin_email = '".$email."',
										admin_adress = '".$alamat."'
										WHERE admin_id ='".$d->admin_id."' " );
						if($update){
							echo '<script>alert("Ubah Data Berhasil")</script>';
							echo '<script>window.location=profile.php</script>';
						}else{
							echo 'gagal' .mysqli_error($conn);
						}




					}


				?>
				
			</div>

			<h3>Ubah Password</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="password" name="pass1" placeholder="Password Baru" class="input-control" required>
					<input type="password" name="pass2" placeholder="Konfirmasi Password" class="input-control" required>
					<input type="submit" name="ubah_password" value="Ubah Password" class="btn">
				</form>
				<?php
					if(isset($_POST['ubah_password'])){
						$pass1 	= $_POST['pass1'];
						$pass2 	= $_POST['pass2'];

						if($pass2 != $pass1){
							echo '<script>alert("Konfirmasi Password Baru Tidak Sesuai")</script>';
						}else{
							$u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
										password = '".MD5($pass1)."'
										WHERE admin_id ='".$d->admin_id."' " );
							if($u_pass){
								echo '<script>alert("Ubah Data Berhasil")</script>';
								echo '<script>window.location=profile.php</script>';
							}else{
								echo 'gagal' .mysqli_error($conn);
							}
						}

					}


				?>
				
			</div>

		</div>
	</div>
<br>

<! -- footer -->
<footer>
	<div class="container">
		<small>copyright &copy; 2021 - JUNTAK STAR. All Rights Reserved</small>
</footer>

<script type="text/javascript">
	$(document).ready(function(){
		$(".bg-loader").hide();
	})
</script>
</br>
</body>
</html>