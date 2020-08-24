-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 11 Agu 2020 pada 11.02
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mycms`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_admin`
--

CREATE TABLE `m_admin` (
  `id` int(11) NOT NULL,
  `admin_username` varchar(190) NOT NULL,
  `admin_password` varchar(290) NOT NULL,
  `admin_email` varchar(190) NOT NULL,
  `admin_reset_token` varchar(290) DEFAULT NULL,
  `admin_api_token` varchar(290) DEFAULT NULL,
  `admin_name` varchar(190) NOT NULL,
  `admin_foto` varchar(190) DEFAULT NULL,
  `admin_role` int(11) NOT NULL,
  `admin_status` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_admin`
--

INSERT INTO `m_admin` (`id`, `admin_username`, `admin_password`, `admin_email`, `admin_reset_token`, `admin_api_token`, `admin_name`, `admin_foto`, `admin_role`, `admin_status`) VALUES
(1, 'admin', '$2y$10$XD/.ex9byv6FPfiykX0dL.ZZPfwR173s5tcubrMRrrb8wcsWX/CNC', 'admin@admin.com', NULL, NULL, 'Admin Asli', 'default.jpg', 1, '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_media`
--

CREATE TABLE `m_media` (
  `id` int(11) NOT NULL,
  `image_name` varchar(190) NOT NULL,
  `image_alt` varchar(190) DEFAULT NULL,
  `image_url` varchar(250) NOT NULL,
  `image_ext` varchar(10) NOT NULL,
  `image_size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `m_setting`
--

CREATE TABLE `m_setting` (
  `id` int(11) NOT NULL,
  `setting_name` varchar(190) NOT NULL,
  `setting_value` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `m_setting`
--

INSERT INTO `m_setting` (`id`, `setting_name`, `setting_value`) VALUES
(1, 'site_name', 'Hello World!'),
(2, 'site_slogan', 'tes'),
(3, 'company_name', ''),
(4, 'company_address', ''),
(5, 'company_city', ''),
(6, 'company_state', ''),
(7, 'company_phone', ''),
(8, 'company_email', ''),
(9, 'company_logo_url', NULL),
(10, 'send_contact', 'email');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `m_admin`
--
ALTER TABLE `m_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_media`
--
ALTER TABLE `m_media`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `m_setting`
--
ALTER TABLE `m_setting`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `m_admin`
--
ALTER TABLE `m_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `m_media`
--
ALTER TABLE `m_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `m_setting`
--
ALTER TABLE `m_setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
