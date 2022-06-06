-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jun 2022 pada 16.20
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apotek_database`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_05_17_144439_create__obat_table', 1),
(6, '2022_05_18_032205_add__foto__obat_table', 2),
(7, '2022_05_21_054242_create_supplier_table', 3),
(8, '2022_05_21_064005_change_lengthsize_table', 3),
(9, '2022_05_23_123221_create_satuan_table', 4),
(10, '2022_05_23_125910_create_penjualan_table', 5),
(11, '2022_05_28_171445_create__jenis_table', 6),
(12, '2022_05_30_123649_createtablepembelian', 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembelian`
--

CREATE TABLE `pembelian` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nota_beli` int(11) NOT NULL,
  `id_nama` bigint(20) UNSIGNED NOT NULL,
  `id_supplai` bigint(20) UNSIGNED NOT NULL,
  `jmlh_beli` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `total_beli` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembelian`
--

INSERT INTO `pembelian` (`id`, `Nota_beli`, `id_nama`, `id_supplai`, `jmlh_beli`, `harga_beli`, `total_beli`, `created_at`, `updated_at`) VALUES
(2, 10002, 8, 5, 38, 4000, 152000, '2022-05-30 07:27:24', '2022-05-30 07:27:24'),
(3, 1003, 7, 5, 12, 9000, 108000, '2022-05-30 07:57:23', '2022-05-30 07:57:23'),
(7, 1005, 15, 3, 10, 5000, 50000, '2022-05-30 08:36:39', '2022-05-30 08:36:39');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_nama` bigint(20) UNSIGNED NOT NULL,
  `id_jenis` bigint(20) UNSIGNED NOT NULL,
  `No_Nota` int(11) NOT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`id`, `id_nama`, `id_jenis`, `No_Nota`, `jumlah`, `tanggal`, `total`, `created_at`, `updated_at`) VALUES
(2, 7, 1, 101, 2, '2022-04-14', 2, '2022-05-28 00:23:16', '2022-05-28 00:23:16'),
(3, 8, 2, 102, 3, '2022-05-27', 3, '2022-05-28 06:31:30', '2022-05-28 06:31:30'),
(4, 9, 2, 103, 2, '2022-05-06', 2, '2022-05-28 06:33:46', '2022-05-28 06:33:46'),
(5, 11, 3, 104, 2, '2022-05-29', 2, '2022-05-29 06:55:06', '2022-05-29 06:55:06'),
(6, 11, 3, 106, 3, '2022-05-31', 3, '2022-05-30 07:28:13', '2022-05-30 07:28:13'),
(8, 17, 5, 107, 30, '2022-06-06', 30, '2022-06-06 06:09:26', '2022-06-06 06:09:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `satuan`
--

CREATE TABLE `satuan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_satuan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`id`, `Nama_satuan`, `created_at`, `updated_at`) VALUES
(1, 'Botol', '2022-05-23 04:51:41', '2022-05-23 04:51:41'),
(2, 'Tablet', '2022-05-23 04:52:52', '2022-05-23 04:52:52'),
(3, 'Kapsul', '2022-05-30 07:25:16', '2022-05-30 07:25:16');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supplier`
--

CREATE TABLE `supplier` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_Supplier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Telepon` bigint(12) UNSIGNED ZEROFILL NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `supplier`
--

INSERT INTO `supplier` (`id`, `Nama_Supplier`, `Alamat`, `Telepon`, `created_at`, `updated_at`) VALUES
(1, 'Kimia Farma', 'jl.perdagangan', 087784689031, '2022-05-23 03:01:16', '2022-05-23 03:47:16'),
(3, 'PT . Indah Kapuk', 'jl. soepomo', 081342567845, '2022-05-25 23:32:53', '2022-05-25 23:32:53'),
(5, 'PT. Kalbe Farmasi', 'Jl. Mangga Besar No.3', 087789216745, '2022-05-30 07:26:49', '2022-05-30 07:26:49'),
(6, 'PT Jaya Utama Santikah', 'Jl Kebun besar', 087645329478, '2022-06-05 21:54:42', '2022-06-05 21:54:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Chatra', 'chatraal32@gmail.com', NULL, '$2y$10$yde93FpiNFSDzgh0.mI/aO.u892HkudROTlIUOVPFgMl.y5Oj.WZC', NULL, '2022-05-25 23:12:17', '2022-05-25 23:12:17'),
(2, 'Lukman', 'lukman7645@gmail.com', NULL, '$2y$10$pBdxdbPy0oUAEcnnKtW.aO5nZLWcOixL0o0APe/Vbb8z08Bz0uyGO', NULL, '2022-05-27 05:46:27', '2022-05-27 05:46:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_jenis`
--

CREATE TABLE `_jenis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Nama_Jenis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `_jenis`
--

INSERT INTO `_jenis` (`id`, `Nama_Jenis`, `created_at`, `updated_at`) VALUES
(1, 'Obat Luka', '2022-05-28 09:45:46', '2022-05-28 09:45:46'),
(2, 'Obat Demam', '2022-05-28 09:46:18', '2022-05-28 09:46:18'),
(3, 'Obat Flu', '2022-05-28 09:47:01', '2022-05-28 09:47:01'),
(4, 'Obat Sakit Kepala', '2022-05-30 07:25:42', '2022-05-30 07:25:42'),
(5, 'Vitamin', '2022-06-05 21:37:27', '2022-06-05 21:37:27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `_obat`
--

CREATE TABLE `_obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Kode_Obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Nama_obat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_supplai` bigint(20) UNSIGNED NOT NULL,
  `id_satuan` bigint(20) UNSIGNED NOT NULL,
  `id_jenis` bigint(20) UNSIGNED NOT NULL,
  `Stok` int(11) NOT NULL,
  `Harga` int(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `_obat`
--

INSERT INTO `_obat` (`id`, `Kode_Obat`, `Nama_obat`, `id_supplai`, `id_satuan`, `id_jenis`, `Stok`, `Harga`, `created_at`, `updated_at`) VALUES
(7, 'BTDN', 'Betadhine', 1, 2, 1, 20, 10000, '2022-05-17 20:59:34', '2022-05-17 20:59:34'),
(8, 'PCML', 'Paracetamol', 1, 1, 2, 30, 12000, '2022-05-17 21:00:04', '2022-05-17 21:00:04'),
(9, 'TRMX', 'Termorex', 1, 1, 2, 10, 13500, '2022-05-25 23:28:28', '2022-05-28 09:12:08'),
(11, 'MXGR', 'Mixagrip', 1, 2, 3, 11, 10000, '2022-05-26 00:58:33', '2022-05-26 00:58:33'),
(15, 'ASRN', 'Aspirin', 3, 2, 4, 12, 8000, '2022-05-30 08:36:12', '2022-05-30 08:36:12'),
(16, 'ULFL', 'Ultraflu', 3, 2, 3, 19, 3500, '2022-05-30 09:40:37', '2022-05-30 09:40:37'),
(17, 'ENVN', 'Enervon-C', 3, 2, 5, 16, 7000, '2022-06-05 21:46:20', '2022-06-05 21:46:20');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_nama` (`id_nama`),
  ADD KEY `id_supplai` (`id_supplai`);

--
-- Indeks untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_harga` (`id_nama`),
  ADD KEY `id_jenis` (`id_jenis`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `satuan`
--
ALTER TABLE `satuan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indeks untuk tabel `_jenis`
--
ALTER TABLE `_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `_obat`
--
ALTER TABLE `_obat`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_satuan` (`id_satuan`),
  ADD KEY `_obat_ibfk_2` (`id_supplai`),
  ADD KEY `_obat_ibfk_3` (`id_jenis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `satuan`
--
ALTER TABLE `satuan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `_jenis`
--
ALTER TABLE `_jenis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `_obat`
--
ALTER TABLE `_obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_nama`) REFERENCES `_obat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_supplai`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_nama`) REFERENCES `_obat` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_jenis`) REFERENCES `_jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `_obat`
--
ALTER TABLE `_obat`
  ADD CONSTRAINT `_obat_ibfk_1` FOREIGN KEY (`id_satuan`) REFERENCES `satuan` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `_obat_ibfk_2` FOREIGN KEY (`id_supplai`) REFERENCES `supplier` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `_obat_ibfk_3` FOREIGN KEY (`id_jenis`) REFERENCES `_jenis` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
