-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 12 Okt 2022 pada 06.44
-- Versi server: 10.3.36-MariaDB-log-cll-lve
-- Versi PHP: 7.0.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sehatrefleksi_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_chat_wa`
--

CREATE TABLE `tbl_chat_wa` (
  `id` int(11) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL,
  `startOnline` time NOT NULL,
  `endOnline` time NOT NULL,
  `createDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `createUserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_chat_wa`
--

INSERT INTO `tbl_chat_wa` (`id`, `nama`, `phone`, `image`, `startOnline`, `endOnline`, `createDate`, `createUserId`) VALUES
(1, 'Admin', '081347774064', 'Admin_2022-08-15 14:17:39.png', '08:00:00', '22:00:00', '2022-08-15 07:17:39', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_fitur`
--

CREATE TABLE `tbl_fitur` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_fitur`
--

INSERT INTO `tbl_fitur` (`id`, `title`, `image`) VALUES
(6, 'Berpengalaman dibidangnya', 'detail-1-1.png'),
(7, 'Kepuasan Pelanggan Terjamin', 'detail-1-2.png'),
(8, 'Harga Terjangkau', 'detail-1-3.png'),
(9, 'Lisensi Bersertifikat', 'detail-1-4.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `name`, `image`) VALUES
(139, 'Foto1', 'Gallery Sehat Refleksi 1.png'),
(140, 'Foto2', 'Gallery Sehat Refleksi 2.png'),
(141, 'Foto3', 'Gallery Sehat Refleksi 3.png'),
(142, 'Foto4', 'Gallery Sehat Refleksi 4.png'),
(143, 'Foto5', 'Gallery Sehat Refleksi 5.png'),
(145, 'Foto6', 'Gallery Sehat Refleksi 7.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_homeweb`
--

CREATE TABLE `tbl_homeweb` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_homeweb`
--

INSERT INTO `tbl_homeweb` (`id`, `title`, `deskripsi`) VALUES
(1, '', 'Manjakan diri anda dengan pijatan yang akan membuat anda rileks dan lelah anda menjadi hilang. Nikmati kenyamanannya bersama terapis terbaik dan profesional yang kami miliki.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pelayanan`
--

CREATE TABLE `tbl_pelayanan` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pelayanan`
--

INSERT INTO `tbl_pelayanan` (`id`, `deskripsi`, `price`) VALUES
(1, 'PIJAT KAKI (45 MENIT)', 65);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pijat_bekam`
--

CREATE TABLE `tbl_pijat_bekam` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pijat_bekam`
--

INSERT INTO `tbl_pijat_bekam` (`id`, `deskripsi`, `price`, `image`) VALUES
(1, 'PIJAT 60 MENIT + BEKAM', 80, '63097f10e69cf.png'),
(2, 'PIJAT 90 MENIT + BEKAM', 110, 'detail-3-2.png'),
(3, 'PIJAT 120 MENIT + BEKAM', 150, 'detail-3-3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pijat_lulur`
--

CREATE TABLE `tbl_pijat_lulur` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pijat_lulur`
--

INSERT INTO `tbl_pijat_lulur` (`id`, `deskripsi`, `price`, `image`) VALUES
(1, 'LULUR SAJA', 60, 'detail-5-1.png'),
(2, 'PIJAT LULUR 90 MENIT', 115, 'Lulur 1.png'),
(3, 'PIJAT LULUR 120 MENIT', 150, 'Lulur 2.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pijat_panggilan`
--

CREATE TABLE `tbl_pijat_panggilan` (
  `id` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pijat_panggilan`
--

INSERT INTO `tbl_pijat_panggilan` (`id`, `deskripsi`, `price`, `image`) VALUES
(1, 'PIJAT PANGGILAN 60 MENIT', 120, '6309807834f47.png'),
(2, 'PIJAT PANGGILAN 90 MENIT', 150, 'Pijat Panggilan 2.png'),
(3, 'PIJAT PANGGILAN 120 MENIT', 200, 'Pijat Panggilan 3.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_sosmed`
--

CREATE TABLE `tbl_sosmed` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `link` varchar(125) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id`, `name`, `link`, `icon`) VALUES
(1, 'Facebook', 'https://www.facebook.com/', 'fa-facebook'),
(2, 'Twitter', 'https://twitter.com/', 'fa-twitter'),
(3, 'Instagram', 'https://www.instagram.com/progitoken/', 'fa-instagram');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_testimoni`
--

CREATE TABLE `tbl_testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `testi` text NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_testimoni`
--

INSERT INTO `tbl_testimoni` (`id`, `nama`, `testi`, `image`) VALUES
(12, 'N. Suciati MW', 'Pelayanannya memuaskan dan pegawainya ramah dgn harga terjangkau', '2.png'),
(13, 'tri bambang chabong', 'Bagus nih..... Silahkan dicoba', '3.png'),
(11, 'Mohamad - Gaddafi', 'Teknik pijatnya pas. Sesuai request. Tarifnya standar msh tergolong murah. Buka sampai jam 10 malam, jd sangat membantu pas nyampe Pangkalan Bun kemalaman.', 'Testimoni.png'),
(14, 'Trimartia Dw', 'Refleksinya nyaman karena ada tempat khusus laki-laki sm perempuan', '4.png'),
(15, 'Toni Kumis', 'Manteb pijatan dam tempatnya, benar2 bikin Rilex..', '5.png'),
(16, 'shune0 ct', 'Pelayanan mantap', '6.png'),
(17, 'Aguh Dp', 'Badan pegel2 pengen relaksasi ya kesini aja', '7.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_website`
--

CREATE TABLE `tbl_website` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `address2` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `fax` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `metaTitle` varchar(80) NOT NULL,
  `metaKeywords` text NOT NULL,
  `metaDescription` text NOT NULL,
  `working_hours` varchar(50) NOT NULL,
  `map` text NOT NULL,
  `map2` text NOT NULL,
  `image` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_website`
--

INSERT INTO `tbl_website` (`id`, `name`, `address`, `address2`, `phone`, `fax`, `email`, `description`, `metaTitle`, `metaKeywords`, `metaDescription`, `working_hours`, `map`, `map2`, `image`) VALUES
(2, 'Sehat Refleksi', '<p>Jl. Sukma Aryaningrat, Baru, Kec. Arut Sel., Kabupaten Kotawaringin Barat, Kalimantan Tengah 74112</p>\r\n', '<p>Jl. Ahmad Wongso, Madurejo, Kec. Arut Sel., Kabupaten Kotawaringin Barat, Kalimantan Tengah 74181</p>\r\n', '081347774064', '123', '123@gmail.com', '<p>Kami memberikan pelayanan pijat dan relaksasi yang bisa dinikmati oleh semua kalangan untuk memperoleh kenyamanan dan kepuasan konsumen dimanapun dan kapanpun. Hubungi customer service kami untuk dapat merasakan pelayanan terbaik kami.</p>\r\n', 'Sehat Refleksi', '', '', '08.00 - 22.00', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3985.4901558213583!2d111.6410964!3d 2.6690224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e08efc7d1710541%3A0x419409d14c4152e1!2sSehat%20Refleksi%20Pijat%20Seluruh%20Badan%20Pria%20Dan%20Wanita!5e0!3m2!1sid!2sid!4v1660192333736!5m2!1sid!2sid\" width=\"100%\" height=\"100%\" style=\"border:0; border-radius: 10px;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3985.382519435523!2d111.6304613!3d-2.7020124!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e08efba9e983af7%3A0x14c551f36accaef9!2sSehat%20Refleksi%20Pijat%20Seluruh%20Badan!5e0!3m2!1sid!2sid!4v1660192350096!5m2!1sid!2sid\" width=\"100%\" height=\"100%\" style=\"border:0; border-radius: 10px;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'logo-revisi.png');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_fitur`
--
ALTER TABLE `tbl_fitur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pijat_bekam`
--
ALTER TABLE `tbl_pijat_bekam`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pijat_lulur`
--
ALTER TABLE `tbl_pijat_lulur`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pijat_panggilan`
--
ALTER TABLE `tbl_pijat_panggilan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_chat_wa`
--
ALTER TABLE `tbl_chat_wa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_fitur`
--
ALTER TABLE `tbl_fitur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=146;

--
-- AUTO_INCREMENT untuk tabel `tbl_homeweb`
--
ALTER TABLE `tbl_homeweb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pelayanan`
--
ALTER TABLE `tbl_pelayanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tbl_pijat_bekam`
--
ALTER TABLE `tbl_pijat_bekam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_pijat_lulur`
--
ALTER TABLE `tbl_pijat_lulur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tbl_pijat_panggilan`
--
ALTER TABLE `tbl_pijat_panggilan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tbl_sosmed`
--
ALTER TABLE `tbl_sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_testimoni`
--
ALTER TABLE `tbl_testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `tbl_website`
--
ALTER TABLE `tbl_website`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
