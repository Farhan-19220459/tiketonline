-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Jul 2024 pada 13.15
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ticketonline`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `No` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`No`, `nama`, `password`) VALUES
(1, 'farhan', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `class`
--

CREATE TABLE `class` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `adult` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `description` varchar(350) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `removed` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `class`
--

INSERT INTO `class` (`id`, `name`, `price`, `quantity`, `adult`, `children`, `description`, `status`, `removed`) VALUES
(1, 'Panorama', 500000, 2, 2, 0, 'asjdiwjaijsidjwadsd', 1, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `class_facilities`
--

CREATE TABLE `class_facilities` (
  `no` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `facilities_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `class_features`
--

CREATE TABLE `class_features` (
  `sr_no` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `features_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `class_images`
--

CREATE TABLE `class_images` (
  `no` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `thumb` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `contacts_detail`
--

CREATE TABLE `contacts_detail` (
  `no` int(11) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gmaps` varchar(250) NOT NULL,
  `telp1` bigint(20) NOT NULL,
  `telp2` bigint(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `iframe` varchar(350) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `contacts_detail`
--

INSERT INTO `contacts_detail` (`no`, `address`, `gmaps`, `telp1`, `telp2`, `email`, `facebook`, `instagram`, `twitter`, `iframe`) VALUES
(1, 'Jl. Dewi Sartika No.289 4, Cawang, Kec. Kramat jati, Kota Jakarta Timur, Daerah Khusus Ibukota Jakarta 13630', 'https://maps.app.goo.gl/XqDQAtdEBactADzK7', 6281574670738, 6281574670738, 'Farhannnn148@gmail.com', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.0796967746714!2d106.86592!3d-6.253230000000001!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3aa633cefa9%3A0xc2ec9cf1706b4841!2sUniversitas%20Bina%20Sarana%20Informatika%20Kampus%20Dewi%20Sartika%20B%20(UBSI%20Dewi%20Sartika%20289)!5e0!3m2!1sid!2sid!4v1717397519126!5m2!1sid!2sid');

-- --------------------------------------------------------

--
-- Struktur dari tabel `facilities`
--

CREATE TABLE `facilities` (
  `id` int(11) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `features`
--

CREATE TABLE `features` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `settings`
--

CREATE TABLE `settings` (
  `no` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `about` varchar(250) NOT NULL,
  `Shutdown` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `settings`
--

INSERT INTO `settings` (`no`, `title`, `about`, `Shutdown`) VALUES
(1, 'farhan', 'aowkaokwaokwoak', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_queries`
--

CREATE TABLE `user_queries` (
  `no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `send` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`No`);

--
-- Indeks untuk tabel `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `class_facilities`
--
ALTER TABLE `class_facilities`
  ADD PRIMARY KEY (`no`),
  ADD KEY `class id` (`class_id`),
  ADD KEY `facilities id` (`facilities_id`);

--
-- Indeks untuk tabel `class_features`
--
ALTER TABLE `class_features`
  ADD PRIMARY KEY (`sr_no`),
  ADD KEY `features id` (`features_id`),
  ADD KEY `clss id` (`class_id`);

--
-- Indeks untuk tabel `class_images`
--
ALTER TABLE `class_images`
  ADD PRIMARY KEY (`no`),
  ADD KEY `class_id` (`class_id`);

--
-- Indeks untuk tabel `contacts_detail`
--
ALTER TABLE `contacts_detail`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `facilities`
--
ALTER TABLE `facilities`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `features`
--
ALTER TABLE `features`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`no`);

--
-- Indeks untuk tabel `user_queries`
--
ALTER TABLE `user_queries`
  ADD PRIMARY KEY (`no`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `class`
--
ALTER TABLE `class`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `class_facilities`
--
ALTER TABLE `class_facilities`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `class_features`
--
ALTER TABLE `class_features`
  MODIFY `sr_no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `class_images`
--
ALTER TABLE `class_images`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `contacts_detail`
--
ALTER TABLE `contacts_detail`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `facilities`
--
ALTER TABLE `facilities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `features`
--
ALTER TABLE `features`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `settings`
--
ALTER TABLE `settings`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_queries`
--
ALTER TABLE `user_queries`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `class_facilities`
--
ALTER TABLE `class_facilities`
  ADD CONSTRAINT `class id` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `facilities id` FOREIGN KEY (`facilities_id`) REFERENCES `facilities` (`id`) ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `class_features`
--
ALTER TABLE `class_features`
  ADD CONSTRAINT `clss id` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`),
  ADD CONSTRAINT `features id` FOREIGN KEY (`features_id`) REFERENCES `features` (`id`);

--
-- Ketidakleluasaan untuk tabel `class_images`
--
ALTER TABLE `class_images`
  ADD CONSTRAINT `class_images_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
