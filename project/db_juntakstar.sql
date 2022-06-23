-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2021 pada 04.56
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_juntakstar`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_telp` varchar(20) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_adress` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`admin_id`, `admin_name`, `username`, `password`, `admin_telp`, `admin_email`, `admin_adress`) VALUES
(1, 'Ardi Simanjuntak', 'admin', '25f9e794323b453885f5181f1b624d0b', '081360108830', 'rumahusahaku2@gmail.com', 'Jalan Melanthon Siregar, No.145 Pematangsiantar Sumatera Utara');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`) VALUES
(11, 'Printer'),
(13, 'CCTV'),
(15, 'Laptop'),
(17, 'CPU'),
(18, 'Instal Ulang Windows'),
(19, 'Recovery Data'),
(20, 'Photo Copy'),
(21, 'Scan'),
(22, 'Laminating'),
(23, 'Jilid'),
(24, 'Cetak/Edit Foto'),
(25, 'Cetak Kartu Nama'),
(26, 'Cetak Undangan'),
(27, 'Tambah Program'),
(28, 'UPGRADE OS'),
(29, 'Update Antivirus'),
(30, 'Repair System'),
(31, 'Repair Flashdisk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_product`
--

CREATE TABLE `tb_product` (
  `product_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `product_image` varchar(100) NOT NULL,
  `product_status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_product`
--

INSERT INTO `tb_product` (`product_id`, `category_id`, `product_name`, `product_price`, `product_description`, `product_image`, `product_status`, `date_created`) VALUES
(36, 13, 'cctvv20', 300000, '<p>IP CAM CCTV OUDOOR 1080P HD PTZ SPEED DOME Q10<br />\r\n<br />\r\nDesain tahan air dan tahan debu<br />\r\n<br />\r\nCocok untuk digunakan di villa, halaman, kebun, kolam, area tanpa pengawasan<br />\r\nBerikan pemantauan, tambahkan kekuatan<br />\r\n<br />\r\nMendukung kabel jaringan / koneksi WIFI<br />\r\n<br />\r\n5db sinyal super kuat<br />\r\n<br />\r\nCiptakan kehidupan dengan kebijaksanaan<br />\r\n<br />\r\nFungsi interkom membutuhkan speaker interkom eksternal, volume super besar 100 desibel, interkom suara jarak 10 meter, dapat memonitor rekaman.<br />\r\nSiang dan malam interkom suara penuh warna<br />\r\n<br />\r\nSifat produk:<br />\r\n<br />\r\nModel produk:PTZ-WIFI-Q10<br />\r\n<br />\r\nKamera HD:2megapixel<br />\r\n<br />\r\nSensor gambar:Coms</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&gt;</p>\r\n\r\n<p>&gt;</p>\r\n\r\n<p>&gt;</p>\r\n', 'produk1629204435.jpg', 1, '2021-08-17 12:47:15'),
(37, 15, 'Laptop Gaming', 15000000, '<p>Spesifikasi Laptop, Yaitu :<br />\r\n1. RAM 16 GB<br />\r\n2. SSD 500 GB<br />\r\n3. Windows 11<br />\r\n4. 64 Bit</p>\r\n', 'produk1629206869.png', 1, '2021-08-17 13:27:49'),
(38, 15, 'Laptop Acer', 8500000, '<p>Spesifikasi laptop, Yaitu :<br />\r\n1. RAM 8 GB<br />\r\n2. Windows 11<br />\r\n3. 64 Bit<br />\r\n4. SSD 500 GB</p>\r\n', 'produk1629207122.png', 1, '2021-08-17 13:32:02'),
(39, 15, 'Laptop Asus', 8000000, '<p>Spesifikasi laptop. Yaitu :<br />\r\n1. RAM 8 GB<br />\r\n2. SSD 1000 GB<br />\r\n3. Windows 10 pro<br />\r\n4. 64 Bit</p>\r\n', 'produk1629207302.png', 1, '2021-08-17 13:35:02'),
(41, 11, 'Printer canon mg02', 6500000, '<p>tidak sesuai</p>\r\n', 'produk1629207606.png', 1, '2021-08-17 13:40:06'),
(42, 11, 'Printer epson L1200', 7000000, '<p>good, baik</p>\r\n', 'produk1632046220.png', 1, '2021-09-19 10:10:20'),
(43, 15, 'laptop1', 1000000000, '<p>acfjafadcac</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&gt;</p>\r\n', 'produk1632046458.png', 0, '2021-09-19 10:14:18');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
