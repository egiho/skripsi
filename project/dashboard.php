<?php
 session_start();

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
		<h1><a href="dashboard.php">Juntak Star</a></h1>
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
<!-- banner -->
<section class="banner">
	<marquee>
		<h2 class="style1">Welcome To Juntak Star Website</h2>
	</marquee>
	<img src="img/banner.jpg" height="870px">;
</section>
<!-- about -->
<section class="about">
	<div class="container">
		<h3>ABOUT</h3>
		<p> <strong>Juntak Star</strong> adalah sebagai salah satu bisnis lokal terkemuka di wilayah Pematangsiantar, kami mengaitkan reputasi kami dengan hubungan pelanggan yang langgeng dan baik yang telah kami kembangkan selama bertahun-tahun. Kami percaya bahwa semua pelanggan kami berhak mendapatkan layanan tingkat tertinggi, dan kami berkomitmen untuk menyediakan hal itu. Juntak star ini menawarkan foto copy, servis perinter, servis laptop, cetak foto, IT support, pemasangan CCTV dan lain-lain.
		</p>
			<br>
			<p><strong>Pemesanan Online</strong>
Ini adalah salah satu layanan paling populer yang tersedia. Ini membuat perbedaan besar bagi banyak pelanggan kami, dan diberikan dengan tingkat keunggulan tertinggi. Dengan layanan ini, kami memastikan semua detailnya sederhana, lancar dan ditangani secara tepat waktu. Setiap kali Anda bekerja dengan Juntak Star, Anda dapat mempercayai bahwa Anda berada di tangan yang baik.</p>
			</br>
				<br>
				<p><strong>Layanan Pelanggan</strong>
Kami ingin semua pelanggan kami merasakan tingkat profesionalisme yang mengesankan ketika bekerja dengan Juntak Star. Semua layanan kami, terutama yang ini, ada untuk membuat hidup Anda lebih mudah dan bebas stres. Anda dapat mempercayai kami untuk menyediakan Anda dengan produk terbaik, serta layanan pelanggan berkualitas terbaik.</p>
				</br>

	</div>
</section>
<! -- service -- >
<section class="service">
	<div class="container">
		<h3>SERVICE</h3>
		<div class="box">
			<div class="col-4">
				<div class="icon"><i class="fas fa-desktop"></i></div>
				<h4>KOMPUTER</h4>
			</div>
		<div class="col-4">
				<div class="icon"><i class="fas fa-edit"></i></div>
				<h4>DESIGN</h4>
			</div>
		<div class="col-4">
				<div class="icon"><i class="fas fa-laptop"></i></div>
				<h4>LAPTOP</h4>
			</div>
		<div class="col-4">
				<div class="icon"><i class="fas fa-print"></i></i></div>
				<h4>PRINTER</h4>
			</div>
		<div class="col-4">
				<div class="icon"><i class="fas fa-chart-bar"></i></div>
				<h4>DIGITAL MARKETTING</h4>
			</div>
		</div>
	</div>
</section>
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