-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 26, 2025 at 04:27 PM
-- Server version: 8.0.30
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kopi(spasi)kita`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `role`, `created_at`) VALUES
(2, 'khafidzzzzz', 'admin@example.com', '202cb962ac59075b964b07152d234b70', 'admin', '2025-03-23 14:00:58'),
(3, 'admin', 'admin@email.com', 'e10adc3949ba59abbe56e057f20f883e', 'admin', '2025-03-24 16:57:11');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` enum('Pending','Dibaca','Ditanggapi') DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `message`, `status`, `created_at`) VALUES
(7, 'Test', 'test@gmail.com', 'lorem', 'loremmm', 'Pending', '2025-03-24 16:27:57');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `kategori` enum('RAMUAN KOPI','KUMPULAN MOCKTAIL','SNACK','THE ONLY ONE','KLASIK','TRADITIONAL SNACKS ALL VARIAN') NOT NULL,
  `deskripsi` text,
  `harga` int NOT NULL,
  `gambar` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nama`, `kategori`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Pangeran Surya', 'RAMUAN KOPI', ' (Kopi Susu Gula Aren) ', 15000, '67e027ca85df81.jpg'),
(2, 'GAUl', 'RAMUAN KOPI', '(Kopi Susu Butter cheese)', 17000, 'ronamerah1.jpg'),
(3, 'LOLI', 'RAMUAN KOPI', '(Kopi Susu Tiramisu)', 17000, '67e027ca85df82.jpg'),
(4, 'DURGUS', 'RAMUAN KOPI', '(Kopi Susu Pandan)', 15000, '67e027ca85df83.jpg'),
(5, 'SI Burung Merak', 'KUMPULAN MOCKTAIL', '(Full Barries Coffee Mocktail) ', 17000, '67e027ca85df821.jpg'),
(6, 'Sang Pelukis Raja ', 'KUMPULAN MOCKTAIL', '(Coldbrew Apple Super Juice) ', 17000, 'ronamerah11.jpg'),
(7, 'Sang Kuda ', 'KUMPULAN MOCKTAIL', '(Fresh Fruit Semangka) ', 17000, '67e027ca85df822.jpg'),
(8, 'Si Mata Hitam ', 'KUMPULAN MOCKTAIL', '(Coldbrew Raspberry Lemon Juice) ', 15000, '67e027ca85df831.jpg'),
(9, 'Si Binatang Jalang ', 'KUMPULAN MOCKTAIL', '(Osmantus Peach Club)', 19000, '67e027ca85df8311.jpg'),
(10, 'Gadis Desa ', 'KUMPULAN MOCKTAIL', '(Super Gingger Apple) ', 17000, '67e027ca85df8211.jpg'),
(11, 'PISANG KACANG ', 'SNACK', '', 15000, '67e02a6d233af1.jpg'),
(12, 'RUJAK CIRENG ', 'SNACK', '', 15000, '67e02a6d233af11.jpg'),
(13, 'KENTANG MIX ', 'SNACK', '', 15000, '67e02a6d233af111.jpg'),
(14, 'NASI TELOR MATASPASI ', 'THE ONLY ONE', '  ', 15000, '67e02a6d233af12.jpg'),
(15, 'LATTE ', 'KLASIK', '', 20000, '67e027ca85df84.jpg'),
(16, 'AMERICANO ', 'KLASIK', '', 20000, '67e027ca85df82111.jpg'),
(17, 'CAPPUCCINO ', 'KLASIK', '', 20000, '67e027ca85df85.jpg'),
(18, 'VGO ', 'KLASIK', '', 20000, '67e027ca85df86.jpg'),
(19, 'MATCHA VANILA CHEESE ', 'KLASIK', '', 19000, '67e027ca85df87.jpg'),
(20, 'MATCHA TIRAMISU ', 'KLASIK', '', 19000, '67e027ca85df88.jpg'),
(21, 'EARL GREY ', 'KLASIK', '', 17000, '67e027ca85df811.jpg'),
(22, 'COKLAT KACANG ', 'KLASIK', '', 17000, '67e027ca85df812.jpg'),
(23, 'COKLAT TIRAMISU ', 'KLASIK', '', 17000, '67e027ca85df89.jpg'),
(24, '  ONLY 5K', 'TRADITIONAL SNACKS ALL VARIAN', '', 5000, 'TE-2022-5000-depan-1200x596.webp');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `harga` decimal(10,2) NOT NULL,
  `deskripsi` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `jumlah_orang` int NOT NULL,
  `status` enum('pending','confirmed','cancelled') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int NOT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `about_img` varchar(255) DEFAULT NULL,
  `about_desk` text,
  `ourstory_img` varchar(255) DEFAULT NULL,
  `ourstory_desk` text,
  `maps` text,
  `alamat` text,
  `whatsapp` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `instagram`, `facebook`, `twitter`, `youtube`, `about_img`, `about_desk`, `ourstory_img`, `ourstory_desk`, `maps`, `alamat`, `whatsapp`, `email`) VALUES
(1, 'https://www.instagram.com/kopispasikita?igsh=MXF1bzZvcjNyMTN2ZA==', 'https://www.instagram.com/kopispasikita?igsh=MXF1bzZvcjNyMTN2ZA==', 'https://www.instagram.com/kopispasikita?igsh=MXF1bzZvcjNyMTN2ZA==', 'https://www.instagram.com/kopispasikita?igsh=MXF1bzZvcjNyMTN2ZA==', 'spasi.jpg', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla explicabo atque praesentium laboriosam voluptates provident labore delectus! Consequuntur maxime magni unde beatae optio ducimus quae placeat dolore eum totam!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla explicabo atque praesentium laboriosam voluptates provident labore delectus! Consequuntur maxime magni unde beatae optio ducimus quae placeat dolore eum totam!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla explicabo atque praesentium laboriosam voluptates provident labore delectus! Consequuntur maxime magni unde beatae optio ducimus quae placeat dolore eum totam!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla explicabo atque praesentium laboriosam voluptates provident labore delectus! Consequuntur maxime magni unde beatae optio ducimus quae placeat dolore eum totam!\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Error, nulla explicabo atque praesentium laboriosam voluptates provident labore delectus! Consequuntur maxime magni unde beatae optio ducimus quae placeat dolore eum totam!\r\n', 'kopispasi.jpg', 'Cerita kami awok awok', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.2394478164606!2d109.13404897441902!3d-6.861881167133456!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb74e6ca69c15%3A0x8df10c95b7f2e89b!2sSPASI%20Creative%20Space!5e0!3m2!1sid!2sid!4v1742837660673!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'Jl. Waru No.11, Mintaragen, Kec. Tegal Tim., Kota Tegal, Jawa Tengah 52121', '0895378168939', 'kopikita@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `peran` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `nama`, `gambar`, `peran`) VALUES
(9, 'Khafidz', 'WhatsApp_Image_2025-03-03_at_23_00_412.jpeg', 'Barista');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int NOT NULL,
  `nama` varchar(255) NOT NULL,
  `pesan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `pesan`) VALUES
(6, 'Hamba Allah', 'Rasanya Mantul\r\n'),
(8, 'Saya', 'Kopinya Enak Mantap'),
(9, 'Adjiemas', 'Rasanya spektakuler wawww'),
(10, 'Khafidz', 'The Best');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','customer') NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD CONSTRAINT `reservasi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
