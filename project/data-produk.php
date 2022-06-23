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
		<h3>Data Produk</h3>
		<div class="box">
			<p><a href="tambah_produk.php">Tambah Data</a></p>
			<table border="1" cellspacing="0" class="table">
				<thead>
					<tr>
						<th width="60px">No</th>
						<th>Kategori</th>
						<th>Nama Produk</th>
						<th>Harga</th>
						<th>Deskripsi</th>
						<th>Gambar</th>
						<th>Status</th>
						<th width="150px">Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$no = 1;
						$produk = mysqli_query($conn, "SELECT * FROM tb_product LEFT JOIN tb_category USING (category_id) ORDER BY product_id DESC");
						if(mysqli_num_rows($produk) > 0){
						while($row = mysqli_fetch_array($produk)){
					?>
					<tr>
						<td><?php echo $no++ ?></td>
						<td><?php echo $row['category_name'] ?></td>
						<td><?php echo $row['product_name'] ?></td>
						<td>Rp <?php echo number_format($row['product_price']) ?></td>
						<td><?php echo $row['product_description'] ?></td>
						<td><a href="produk/<?php echo $row['product_image'] ?>" target="_blank"><img src="produk/<?php echo $row['product_image'] ?>" width="50px"></a></td>
						<td><?php echo ($row['product_status'] == 0)? 'Tidak Aktif':'Aktif'; ?></td>
						<td>
							<a href="edit-produk.php?id=<?php echo $row['product_id'] ?>">Edit</a> || <a href="proses-hapus.php?idp=<?php echo $row['product_id'] ?>" onclick ="return confirm('Yakin Ingin Hapus ?')" >Hapus</a>
						</td>
					</tr>
					<?php }}else{ ?>
						<tr>
							<td colspan="8"> Tidak Ada Data</td>
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