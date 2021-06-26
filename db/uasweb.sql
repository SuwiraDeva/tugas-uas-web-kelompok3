-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jun 2021 pada 13.14
-- Versi server: 10.4.19-MariaDB
-- Versi PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uasweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `hak_akses` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `hak_akses`) VALUES
('08062021132326', 'insd', '$argon2i$v=19$m=65536,t=4,p=1$VUlYL3BCUTJrQnNZUlhnVA$LvpARmL4Q/tH7c6kTn50Ky+0sSmEFhvdtN884V2jTw0', 'deva', 'USER'),
('31052021221115', 'admin', '$argon2i$v=19$m=65536,t=4,p=1$UlRkbVZFanpWR2Vob0FMUQ$QC5VqLNFODxXxJibVhWz8/P8aJcfdmvaeZrxx2rA6w0', 'admin', 'ADMIN'),
('26062021180915', 'engel', '$argon2i$v=19$m=65536,t=4,p=1$bE11TDJLWExpdmFlYjJaMQ$a/ZIeHq+kTg3MRyV9YADoV0+kyvv4KNX0ypju6eFdOM', 'engel', 'USER');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
