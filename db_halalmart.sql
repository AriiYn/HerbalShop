-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 09 Des 2023 pada 05.10
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_halalmart`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(35) NOT NULL,
  `image` varchar(55) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_admin`
--

CREATE TABLE `login_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login_admin`
--

INSERT INTO `login_admin` (`id_admin`, `nama`, `username`, `password`, `no_tlp`, `email`, `alamat`) VALUES
(1, 'Fachri Dolp', 'admin', 'admin1', '+6281280470144', 'halal@gmail.com', 'Jl. Bersama, Sawangan. Depok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_pelanggan`
--

CREATE TABLE `login_pelanggan` (
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(30) NOT NULL,
  `no_tlp` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `login_pelanggan`
--

INSERT INTO `login_pelanggan` (`id_pelanggan`, `nama`, `username`, `password`, `no_tlp`, `email`, `alamat`) VALUES
(7, 'Asep Alamsyah', 'asep', 'asep1', '0871-7287-2176', 'Asep@gmail.com', 'JL. Telaga1, Cinangka. Depok'),
(9, 'Pian Ramadhan', 'pian', 'pian1', '0871-7287-2176', 'pian@gmail.com', 'Jl. Bakti karya, Sawangan. Depok');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `image` varchar(50) NOT NULL,
  `nama_kategori` varchar(25) NOT NULL,
  `name` varchar(35) NOT NULL,
  `stok` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` text NOT NULL,
  `berat` varchar(25) NOT NULL,
  `product_status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `image`, `nama_kategori`, `name`, `stok`, `price`, `description`, `berat`, `product_status`) VALUES
(89, 'MAGAFIT Herb1.png', 'Produk Herbal', 'Magafit', 25, 90000, '<a><p><b>KEGUNAAN</b></p>Membantu memelihara kesehatan fungsi saluran pencernaan.</a><br><a><p><b>KANDUNGAN</b></P>Temu Lawak (Curcumae rhizoma), Kunyit (Curcumae domestica rhizoma ekstrak), Daun Dewa (Gynura procumbensis folium ekstrak), Daun Sembung(Blumeae folium ekstrak), Kunyit Putih (Curcumae mangga rhizoma ekstrak)</a><br><a><p><b>Aturan Pakai</b></p>Diminum 1 jam sebelum makan</a><br><br>', '50 kapsul @500mg', 1),
(90, 'BILBERRY Herb7.png', 'Produk Herbal', 'Bilberry', 26, 90000, '<a><p><b>KEGUNAAN</b></p>Membantu memelihara kesehatan mata dan kesehatan tubuh.</a><br><a><p><b>KOMPOSISI</b></P>Bilberry (Vaccinum myrtillus fructus extractum)</a><br>                  <a><p><b>Aturan Pakai</b></p>Dewasa 2 kali sehari 2 kapsu</a><br><a><p><b>Ajuran</b></p>Diminum setelah makan dan perbanyak minum air hangat</a><br><br>', '50 kapsul @500mg', 1),
(91, 'PEGAGAN Herb4.png', 'Produk Herbal', 'Pegagan HS', 36, 90000, '<a><p><b>KEGUNAAN</b></p>Membantu sirkulasi darah</a><br><a><p><b>KOMPOSISI</b></p>Centellae Herbal Ektrak</a><br>                  <a><p><b>Aturan Pakai</b></p>Dewasa 2 x 1 kapsul sehari</a><br><a><p><b>Ajuran</b></p>Diminum 1 (satu) jam sebelum makan.</a><br><br>', '50 kapsul @500mg', 1),
(92, 'MINYAAK HERBA SINERGI Herb11.png', 'Produk Herbal', 'MInyak Herbal Sinergi', 39, 45000, '<a><p><b>KEGUNAAN</b></p>Secara tradisional digunakan sebagai minyak gosok dan minyak urut untuk membantu meredakan pegal linu dan nyeri sendi, serta luka memar.</a><br><a><p><b>KOMPOSISI</b></p><p>- Virgin Coconut Oil</p><p>- Oleum Olea Europea</p><p>- Oleum Elaesis Guineensis</p>                         <p>- Kaempferia Galanga Rhizoma</p><p>- Tinosporae Crispa Caulis</p><p>- Cinnamomi Burmannii Cortex</p><p>- Andrographidis Paniculatae Herba</p><p>- Eugenia Caryophilli Flos</p></a><a><p><b>Aturan Pakai</b></p>Oleskan bagian tubuh yang memerlukan</a><br><br>', 'Netto 100ml', 1),
(93, 'MINYAK KAYU PUTIH Herb12.png', 'Produk Herbal', 'MInyak Kayu Putih', 28, 50000, '<a><p><b>KEGUNAAN</b></p>Membantu melegakan hidung tersumbat, membantu meredakan gatal-gatal akibat digigit serangga</a><br><a><p><b>KOMPOSISI</b></P>Oleum Cajuputi 90%, Eucalyptus 10%</a><br><a><p><b>Aturan Pakai</b></p>Digosokkan pada tempat yang sakit</a><br><br>', 'Netto 100ml', 1),
(94, 'BIOSIR Herb8.png', 'Produk Herbal', 'Biosir', 32, 90000, '<a><p><b>KEGUNAAN</b></p>Membantu meringankan gejala wasir</a><br><a><p><b>KOMPOSISI</b></P><p>- Daun Wungu (Graptophylli folium ekstrak)</p><p>- Temulawak (Curcumae rhizome ekstrak)</p><p>- Pegagan (Centellae herba ekstrak)</p><p>- Sambiloto (Andrographidis herba ekstrak)</p></a><a><p><b>Aturan Pakai</b></p>Dewasa : 3 x 1 kapsul sehari</a><br><a><p><b>Ajuran</b></p>Jika tidak memiliki masalah lambung, diminum 1 jam sebelum makan.</a><br><br>', '50 kapsul @500mg', 1),
(95, 'EGM Health4.png', 'Produk Makanan & Kesehata', 'Etta Goat Milk', 24, 75000, '<a>Susu kambing lebih mudah dicerna, kandungan gizi lebih lengkap, merupakan sumber kalsium, protein, asam amino, fosfor, kalium, riboflavin (vitamin B2).</a><br><a><p><b>KOMPOSISI</b></P>Susu kambing Etawa bubuk & gula</a><br>', '10 sachets x 25 gr', 1),
(96, 'egm cokelat pouch Health12.png', 'Produk Makanan & Kesehata', 'Etta Goat Milk Coklat', 26, 80000, '<a>Susu kambing bubuk ettawa dengan krim bubuk rasa cokelat.</a><br><a><p><b>KOMPOSISI</b></P>Susu kambing Etawa bubuk & gula</a><br><br>', '10 sachets x 25 gr', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `id_category` int(11) NOT NULL,
  `nama_category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`id_category`, `nama_category`) VALUES
(1, 'Produk Herbal'),
(2, 'Produk Makanan & Kesehatan'),
(3, 'Produk Kosmetik');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `login_pelanggan`
--
ALTER TABLE `login_pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_category`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `login_admin`
--
ALTER TABLE `login_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `login_pelanggan`
--
ALTER TABLE `login_pelanggan`
  MODIFY `id_pelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
