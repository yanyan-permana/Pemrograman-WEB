-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Apr 2022 pada 02.36
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `product`
--

CREATE TABLE `product` (
  `product_id` varchar(10) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `product_category` varchar(20) NOT NULL,
  `product_origin` varchar(20) NOT NULL,
  `product_description` varchar(500) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_category`, `product_origin`, `product_description`, `quantity`, `price`, `status`) VALUES
('OPEK01', 'Oppo Reno6 5G', 'Electronic', 'Tiongkok', 'Layar : AMOLED, 90Hz, 430 nits (typ), 600 nits (HDR), 750 nits (peak), 6.43 inches, 99.8 cm2 (~88.3% screen-to-body ratio)\r\nResolusi : 1080 x 2400 pixels, 20:9 ratio (~409 ppi density)\r\nOS : Android 11, ColorOS 11.3\r\nChipset : MediaTek MT6877 Dimensity 900 5G (6 nm)\r\nCPU : Octa-core (2×2.4 GHz Cortex-A78 & 6×2.0 GHz Cortex-A55)\r\nGPU : Mali-G78 MC4\r\nRAM/ROM : 128GB 8GB RAM, 256GB 12GB RAM\r\nMemori Eksternal: No', 50, '4000000', 1),
('RLEK01', 'Realme 8 Pro', 'Electronic', 'Tiongkok', 'Layar : IPS LCD, 90Hz, 480 nits (typ), 600 nits. 6.5 inches, 102.0 cm2 (~83.9% screen-to-body ratio)\r\nResolusi : 1080 x 2400 pixels, 20:9 ratio (~405 ppi density)\r\nOS : Android 11, Realme UI 2.0\r\nChipset : MediaTek MT6833 Dimensity 700 5G (7 nm)\r\nCPU : Octa-core (2×2.2 GHz Cortex-A76 & 6×2.0 GHz Cortex-A55)\r\nGPU : Mali-G57 MC2\r\nRAM/ROM : 128GB 4GB RAM\r\nMemori Eksternal: microSDXC (dedicated slot)\r\nKamera Utama : Triple 48 MP, f/1.8, 26mm (wide), PDAF\r\n2 MP, f/2.4, (macro)\r\n2 MP, f/2.4, (depth)\r\n', 15, '4500000', 1),
('SHSK01', 'Heaven Spring', 'Skin Care', 'Indonesia', 'Ada Anti-Dandruff Shampoo yang dibuat dengan bahan alami terbaik. Hadir dengan ekstrak daun mint, produk ini bisa membunuh jamur dan bakteri penyebab ketombe pada kulit kepala.', 15, '100000', 1),
('SMEK02', 'Samsung Galaxy M42 5G', 'Electronic', 'Indonesia', 'Layar : Super AMOLED, 6.6 inches, 105.2 cm2 (~84.3% screen-to-body ratio)\r\nResolusi : 720 x 1600 pixels, 20:9 ratio (~266 ppi density)\r\nOS : Android 11, One UI 3.1\r\nChipset : Qualcomm SM7225 Snapdragon 750G 5G (8 nm)\r\nCPU : Octa-core (2×2.2 GHz Kryo 570 & 6×1.8 GHz Kryo 570)\r\nGPU : Adreno 619\r\nRAM/ROM : 128GB 6GB RAM, 128GB 8GB RAM\r\nMemori Eksternal: Card slot microSDXC (uses shared SIM slot)', 50, '5000000', 1),
('SSEK01', 'Samsung Galaxy F52 5G', 'Electronic', 'Indonesia', 'Layar : TFT, 120Hz, 6.6 inches, 104.9 cm2 (~83.6% screen-to-body ratio)\r\nResolusi : 1080 x 2408 pixels, 20:9 ratio (~400 ppi density)\r\nOS : Android 11, One UI 3.1\r\nChipset : Qualcomm SM7225 Snapdragon 750G 5G (8 nm)\r\nCPU : Octa-core (2×2.2 GHz Kryo 570 & 6×1.8 GHz Kryo 570)', 20, '4000000', 0),
('WDSK01', 'Seaweed Cleansing Micellar Water', 'Skin Care', 'Indonesia', 'Pembersih make up dari bahan air merupakan produk Micellar Water unggulan Wardah', 10, '50000', 0),
('WDSK02', 'Lightening Day Cream', 'Skin Care', 'Indonesia', 'Mengandung vitamin B3 yang bermanfaat untuk meratakan warna kulit dan menyamarkan kerutan.', 10, '75000', 0),
('WDSK03', 'www', 'www', 'www', 'www', 10, '75000', 0),
('WDSK04', 'www1', 'www1', 'www1', 'www1', 10, '75000', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
