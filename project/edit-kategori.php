<?php
 session_start();
 include 'config.php';

 // set session
 if($_SESSION['status_login'] != true){
 	echo '<script>window.location="index.php"</script>';
 }
 $kategori = mysqli_query($conn, "SELECT * FROM tb_category WHERE category_id = '".$_GET['id']."' ");
 if(mysqli_num_rows ($kategori) == 0){
 	echo '<script>window.location="data_kategori.php"</script>';
 }
 $k = mysqli_fetch_object($kategori);
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
			<h3>Edit Data</h3>
			<div class="box">
				<form action="" method="POST">
					<input type="text" name="nama" placeholder="Nama Kategori" class="input-control" value="<?php echo $k-> category_name ?>" required>
					<input type="submit" name="submit" value="Submit" class="btn">
				</form>
				<?php
					if(isset($_POST['submit'])){

						$nama = ucwords($_POST['nama']);

						$update = mysqli_query($conn, "UPDATE tb_category SET 
												category_name = '".$nama."' 
												WHERE category_id = '".$k->category_id."' ");
						if($update){
							echo '<script>alert("Edit Data Berhasil")</script>';
							echo '<script>window.location="data_kategori.php</script>';
						}else{
							echo 'gagal' .mysqli_error($conn);
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