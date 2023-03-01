-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Mar 2023 pada 18.14
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kanigara_adventure`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cabang`
--

CREATE TABLE `cabang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `lokasi` text NOT NULL,
  `nomor_hp` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `cabang`
--

INSERT INTO `cabang` (`id`, `id_user`, `nama`, `lokasi`, `nomor_hp`, `created_at`, `updated_at`) VALUES
(1, 2, 'Jogja Adventure', 'Yogyakarta', '0891513123123', '2023-02-05 22:37:17', '2023-02-05 22:37:17'),
(2, 3, 'Banjar Adventure', 'Banjarmasin', '', '2023-02-05 23:29:00', '2023-02-05 23:29:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `foto_produk`
--

CREATE TABLE `foto_produk` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `url_gambar` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `foto_produk`
--

INSERT INTO `foto_produk` (`id`, `id_produk`, `url_gambar`, `created_at`, `updated_at`) VALUES
(1, 20, 'error_xampp1.png', '2023-03-01 15:43:34', '2023-03-01 15:43:34'),
(2, 20, 'disnakertrans_logo.png', '2023-03-01 15:43:34', '2023-03-01 15:43:34'),
(3, 20, 'sistem_perpustakaan_(1).png', '2023-03-01 15:43:34', '2023-03-01 15:43:34'),
(4, 20, 'sistem_perpustakaan.png', '2023-03-01 15:43:34', '2023-03-01 15:43:34'),
(5, 20, 'Untitled.png', '2023-03-01 15:43:34', '2023-03-01 15:43:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `id` int(11) NOT NULL,
  `kode_produk` varchar(10) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `id_cabang` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`id`, `kode_produk`, `id_produk`, `id_cabang`, `jumlah`, `created_at`, `updated_at`) VALUES
(1, 'weUGpIo', 2, 1, 7, '2023-02-05 22:47:04', '2023-02-05 22:47:04'),
(2, 'dUgXbKf', 3, 1, 3, '2023-02-05 22:49:28', '2023-02-05 22:49:28'),
(3, 'I3TGFBN', 4, 1, 5, '2023-02-05 22:49:41', '2023-02-05 22:49:41'),
(4, 'U4JoEkL', 5, 1, 5, '2023-02-05 22:49:46', '2023-02-05 22:49:46'),
(5, '6MvLG7h', 6, 1, 3, '2023-02-05 22:49:51', '2023-02-05 22:49:51'),
(6, 'iar89nC', 7, 1, 12, '2023-02-05 22:49:57', '2023-02-05 22:49:57'),
(7, 'xJqkumz', 8, 1, 2, '2023-02-05 22:50:03', '2023-02-05 22:50:03'),
(8, 'm3fBAgS', 9, 1, 3, '2023-02-05 22:50:10', '2023-02-05 22:50:10'),
(9, 'HG2bmqx', 2, 2, 7, '2023-02-05 23:29:12', '2023-02-05 23:29:12'),
(10, 'yhrfTBM', 4, 2, 5, '2023-02-05 23:29:19', '2023-02-05 23:29:19'),
(11, 'P0YtqWQ', 9, 2, 3, '2023-02-05 23:29:26', '2023-02-05 23:29:26'),
(12, 'RuAlBWZ', 8, 2, 2, '2023-02-05 23:29:31', '2023-02-05 23:29:31'),
(14, 'RZr6OcI', 20, 1, 5, '2023-03-01 18:05:50', '2023-03-01 18:05:50');

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `merk` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`id`, `nama`, `harga`, `foto`, `detail`, `merk`, `created_at`, `updated_at`) VALUES
(1, 'Helm', 9600, 'wp2153377-doraemon-hd-wallpapers3.jpg', 'Bagaimana caranya', 'Doraemon', '2023-02-04 09:40:09', '2023-02-04 09:40:09'),
(2, 'Carrier 35L', 25000, 'carrier_35l.png', 'Tas Carrier dengan kapasitas 35 Liter', '-', '2023-02-05 22:33:50', '2023-02-05 22:33:50'),
(3, 'Egg Holder', 5000, 'egg_holder.png', 'Egg Holder', '-', '2023-02-05 22:34:14', '2023-02-05 22:34:14'),
(4, 'Hammock Blue 1', 25000, 'hammock_blue1.png', 'Hammock Blue 1', '-', '2023-02-05 22:34:40', '2023-02-05 22:34:40'),
(5, 'Hammock Blue 2', 25000, 'hammock_blue2.png', 'Hammock Blue 1', '-', '2023-02-05 22:35:00', '2023-02-05 22:35:00'),
(6, 'Sleeping Bag', 30000, 'sleeping_bag.png', 'Sleeping Bag', '-', '2023-02-05 22:35:27', '2023-02-05 22:35:27'),
(7, 'Tracking Pole', 15000, 'tracking_pole.png', 'Tracking Pole', '-', '2023-02-05 22:35:49', '2023-02-05 22:35:49'),
(8, 'Carrier 70L', 30000, 'carrier_70l.jpg', 'Carrier 70L', '-', '2023-02-05 22:36:12', '2023-02-05 22:36:12'),
(9, 'Tenda 4 Orang', 50000, 'tenda_4_orang.jpg', 'Tenda 4 Orang', '-', '2023-02-05 22:36:31', '2023-02-05 22:36:31'),
(20, 'Test', 200000, 'image_(6)10.png', 'hahahaha', 'Test Juga', '2023-03-01 15:43:34', '2023-03-01 15:43:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `role_user`
--

CREATE TABLE `role_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `role_user`
--

INSERT INTO `role_user` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-02-24 09:41:13', '2023-02-24 09:41:13'),
(2, 'cabang', '2023-02-24 09:41:13', '2023-02-24 09:41:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_keluar`
--

CREATE TABLE `sewa_keluar` (
  `id` int(11) NOT NULL,
  `id_produk` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `KTP_penyewa` varchar(20) NOT NULL,
  `nama_penyewa` varchar(60) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sewa_keluar`
--

INSERT INTO `sewa_keluar` (`id`, `id_produk`, `jumlah`, `KTP_penyewa`, `nama_penyewa`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '1600018015', 'Insan Kamil', '2023-02-22 10:13:10', '2023-02-22 10:13:10'),
(2, 2, 1, '1600018015', 'Insan Kamil', '2023-02-24 08:54:15', '2023-02-24 08:54:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sewa_masuk`
--

CREATE TABLE `sewa_masuk` (
  `id` int(11) NOT NULL,
  `id_sewa_keluar` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `sewa_masuk`
--

INSERT INTO `sewa_masuk` (`id`, `id_sewa_keluar`, `created_at`, `updated_at`) VALUES
(1, 1, '2023-03-01 15:48:34', '2023-03-01 15:48:34'),
(2, 2, '2023-03-01 15:48:34', '2023-03-01 15:48:34');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role_id`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$Yl8SIO8UfTXMAUQ.I2F25u4jomVx90cOXFBalu6svyVs4N40w2jGu', 1, 1, '2023-02-24 09:18:06', '2023-02-24 09:18:06'),
(2, 'kanigara.jogja', '$2y$10$Yl8SIO8UfTXMAUQ.I2F25u4jomVx90cOXFBalu6svyVs4N40w2jGu', 2, 1, '2023-02-24 09:40:49', '2023-02-24 09:40:49'),
(3, 'kanigara.banjarmasin', '$2y$10$Yl8SIO8UfTXMAUQ.I2F25u4jomVx90cOXFBalu6svyVs4N40w2jGu', 2, 1, '2023-02-24 09:40:49', '2023-02-24 09:40:49');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cabang`
--
ALTER TABLE `cabang`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `foto_produk`
--
ALTER TABLE `foto_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sewa_keluar`
--
ALTER TABLE `sewa_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sewa_masuk`
--
ALTER TABLE `sewa_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cabang`
--
ALTER TABLE `cabang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `foto_produk`
--
ALTER TABLE `foto_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `katalog`
--
ALTER TABLE `katalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT untuk tabel `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sewa_keluar`
--
ALTER TABLE `sewa_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `sewa_masuk`
--
ALTER TABLE `sewa_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
