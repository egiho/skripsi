<?php
 session_start();
 include 'config.php';

 // set session
 if($_SESSION['status_login'] != true){
 	echo '<script>window.location="index.php"</script>';
 }
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
	<header>
		<div class="container">
		<h1><a href="data_kategori.php">Juntak Star</a></h1>
		<ul>
			<li class="active"><a href="dashboard.php">HOME</a></li>
			<li><a href="about.html">ABOUT</a></li>
			<li><a href="service.html">SERVICE</a></li>
			<li><a href="profile.php">PROFILE</a></li>
			<li><a href="data_kategori.php">DATA KATEGORI</a></li>
			<li><a href="data-produk.php">PRODUK</a></li>
			<li><a href="contact.html">CONTACT</a></li>
			<li><a href="keluar.php">KELUAR</a></li>
		</ul>
	</div>
</header>

<!-- content -->
<div class="section">
	<div class="container">
		<h3>Data Kategori</h3>
		<div class="box">
			<p><a href="tambah-kategori.php">Tambah Data</a></p>
			<table border="1" cellspacing="0" class="table">
				<thead>
					<tr>
						<th width="50px">No</th>
						<th width="350px">Kategori</th>
						<th width="100px">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						$Kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
							while($row = mysqli_fetch_array($Kategori)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['category_name'] ?></td>
						<td>
							<a href="edit-kategori.php?id=<?php echo $row['category_id'] ?>">Edit</a> || <a href="proses-hapus.php?idk=<?php echo $row['category_id'] ?>" onclick ="return confirm('Yakin Ingin Hapus ?')">Hapus</a>
						</td>
					</tr>
						<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
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
</body>
</html>