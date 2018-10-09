-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 04 Jul 2018 pada 15.04
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_perpustakaan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `firstname`, `lastname`, `email`, `username`, `password`, `level`) VALUES
(3001, 'Moch', 'Pratama', 'mochgunturpratama@gmail.com', 'gunturadm', 'hardcore1234', '0'),
(3002, 'Ida Bagus Made', 'Yudiarta', 'yudiarta538@gmail.com', 'gusadeadm', 'admin', '0'),
(3003, 'Satria', 'Pratama', 'aptx@gmail.com', 'satriapratama', 'admin1234', '0');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_buku`
--

CREATE TABLE `tb_buku` (
  `id_buku` int(100) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `id_penulis` int(100) NOT NULL,
  `id_penerbit` int(100) NOT NULL,
  `id_kategori` int(100) NOT NULL,
  `jumlah_halaman` int(100) NOT NULL,
  `tahun_terbit` date NOT NULL,
  `deskripsi` text NOT NULL,
  `jumlah_buku` int(50) NOT NULL,
  `gambar_buku` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_buku`
--

INSERT INTO `tb_buku` (`id_buku`, `judul_buku`, `isbn`, `id_penulis`, `id_penerbit`, `id_kategori`, `jumlah_halaman`, `tahun_terbit`, `deskripsi`, `jumlah_buku`, `gambar_buku`) VALUES
(1001, 'ASSESMENT EVIRONMENTAL', '7001', 7001, 5001, 1, 100, '2018-02-04', 'BUKU INI ADALAH BUKU TENTANG PEMBELAJARAN HIDUP YANG SANGAT BERGUNA UNTUK JOMBLO SEPERTI ANDA', 4, 'education1.jpg'),
(1002, 'EXCEPTIONAL CHILDREN', '7002', 7002, 5002, 1, 100, '2018-06-03', 'BUKU INI ADALAH BUKU TENTANG BAGAIMANA CARA MERAWAT ANAK DENGAN BAIK DAN MENJADIKAN ANAK ANDA JADI LEBIH BERGUNA DAN TIDAK MENJADI GENERASI MICIN', 5, 'education2.jpg'),
(1003, 'EDUCATION OF LIFE', '3001', 7002, 5003, 1, 100, '2017-10-16', 'BUKU INI TENTANG BAGAIMANA KERASNYA HIDUP YANG AKAN ANDA JALANI SEBAGAI PROGRAMMER', 4, 'education3.jpg'),
(1004, 'INSLUSIVE EDUCATION', '3006', 7003, 5004, 1, 80, '2017-07-11', 'BUKU INI MEMPELAJARI TENTANG BAGAIMANA CARA BUNUH DIRI YANG ENAK', 4, 'education4.jpg'),
(1005, 'ONE PIECE CHAPTER DRESSROSA', '4001', 7002, 5003, 2, 500, '2018-06-03', 'KOMIK INI KOMIK BUATAN EICHIRO ODA', 5, 'fiction.jpg'),
(1006, 'ONE PIECE END NO BOKEN', '3009', 7003, 5001, 2, 100, '2017-12-11', 'BUKU INI BUATAN EICHIRO ODA', 4, 'fiction2.jpg'),
(1007, 'DRAGONBALL Z', '5003', 7004, 5001, 2, 200, '2017-08-13', 'BUKU INI BUATAN MASAKO ,BUKAN MASAKO MICIN YA', 6, 'fiction3.jpg'),
(1008, 'HARRY POTTER SORCERER STONE', '5001', 7005, 5002, 2, 1000, '2017-10-16', 'BUKU CIPTAAN JK ROWLING INI CUKUP LARIS DIKALANGAN GENERASI MICIN SEKARANG INI', 6, 'fiction4.jpg'),
(1009, 'ONE PIECE HENTAI ', '6090', 7005, 5004, 2, 200, '2017-10-08', 'BUKU HENTAI,JANGAN DIBACA !', 6, 'fiction5.jpg'),
(1010, 'HARRY POTTER CHAMBER OF SECRET', '5432', 7001, 5001, 2, 100, '2017-10-08', 'BUKU INI MENCERITAKAN TENTANG BAGAIMANA HARRY POTTER SELAMAT DARI GENERASI MICIN', 6, 'kontol.jpg'),
(1011, 'HTML & CSS LEARNING', '5489', 7002, 5004, 3, 10, '2018-06-03', 'BUKU INI MEMPELAJARI TENTANG BAGAIMANA BELAJAR DENGAN MENGUNAKAN CSS DAN HTML', 5, 'technology1.jpg'),
(1012, 'THE TRUTH HTML5', '5781', 7003, 5001, 3, 60, '2017-11-05', 'BUKU INI MEMPELAJARI TENTANG APA ITU HTML5', 4, 'technology2.jpg'),
(1013, 'JAVASCRIPT AND JQUERRY', '4621', 7002, 5004, 3, 100, '2018-06-04', 'BUKU INI MEMPELAJARI TENTANG JAVASCRIPT DAN JQUERRY', 9, 'technology3.png'),
(1014, 'LARAVEL LEARNING', '5609', 7003, 5003, 3, 100, '2017-02-06', 'BUKU INI MEMPELAJARI TENTANG LARAVEL ,LARAVEL YAITU SUATU FRAMEWORK DALAM PHP', 8, 'technology4.jpg'),
(1015, 'Buku Ekonomi Guru', '7400', 7003, 5001, 1, 300, '2017-09-18', 'buku ga penting,jangan dibaca!', 100, 'education5.jpg'),
(1016, 'Buku Biologi Guru', '7440', 7002, 5003, 1, 100, '2017-02-05', 'buku ini tentang bagaimana cara bercocok tanam', 100, 'education6.jpg'),
(1017, 'Big Data', '5030', 7004, 5001, 3, 100, '2017-11-06', 'buku ini tentang bagaimana belajar big data', 100, 'technology5.jpg'),
(1018, 'teknologi informasi', '1050', 7002, 5001, 3, 100, '2018-01-22', 'buku yang ga berfaedah !', 100, 'technology6.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_cart`
--

CREATE TABLE `tb_cart` (
  `id_cart` int(100) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `id_buku` int(100) NOT NULL,
  `id_transaksi` int(100) NOT NULL,
  `quantity` smallint(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `id_kategori` int(100) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `status`) VALUES
(1, 'education', 'active'),
(2, 'fiction', 'active'),
(3, 'technology', 'active');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kritiksaran`
--

CREATE TABLE `tb_kritiksaran` (
  `id_saran` int(100) NOT NULL,
  `nama_pengunjung` varchar(100) NOT NULL,
  `no_telp` int(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kritikdansaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_kritiksaran`
--

INSERT INTO `tb_kritiksaran` (`id_saran`, `nama_pengunjung`, `no_telp`, `email`, `kritikdansaran`) VALUES
(1, '.moch guntur pratama.', 2147483647, '.gusade1234@gmail.com.', '.pak saya mau komplain.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penerbit`
--

CREATE TABLE `tb_penerbit` (
  `id_penerbit` int(100) NOT NULL,
  `nama_penerbit` varchar(100) NOT NULL,
  `alamat_penerbit` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penerbit`
--

INSERT INTO `tb_penerbit` (`id_penerbit`, `nama_penerbit`, `alamat_penerbit`) VALUES
(5001, 'Gramedia', 'jalan Majapahit,jakarta'),
(5002, 'Gubuk Media', 'jalan jadi jadian,sumba'),
(5003, 'Waluyo', 'jalan menuju ke neraka,surabaya'),
(5004, 'Stiki Indonesia', 'jalan orang ganteng,bali');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_penulis`
--

CREATE TABLE `tb_penulis` (
  `id_penulis` int(100) NOT NULL,
  `nama_penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_penulis`
--

INSERT INTO `tb_penulis` (`id_penulis`, `nama_penulis`) VALUES
(7001, 'JK ROWLING'),
(7002, 'WAHYU BASKARA'),
(7003, 'DIVA AMARTHA'),
(7004, 'EICHIRO ODA'),
(7005, 'MASAKO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_transaksi`
--

CREATE TABLE `tb_transaksi` (
  `id_transaksi` int(100) NOT NULL,
  `id_cart` int(100) NOT NULL,
  `id_user` int(100) NOT NULL,
  `id_buku` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `jumlah_denda` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `flag` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `firstname`, `lastname`, `email`, `username_user`, `password`, `flag`) VALUES
(1001, 'Panji', 'Diva', 'panjidivaamartha@gmail.com', 'panjidiva', '1234', '1'),
(1002, 'Made', 'Sucipta', 'madesucipta@gmail.com ', 'madesucipta123', 'made2345', '1'),
(1006, 'michael', 'jordan', 'pengabdixketan@gmail.com', 'michaeljr', '1234', '1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `tb_cart`
--
ALTER TABLE `tb_cart`
  ADD PRIMARY KEY (`id_cart`);

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  ADD PRIMARY KEY (`id_saran`);

--
-- Indeks untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indeks untuk tabel `tb_penulis`
--
ALTER TABLE `tb_penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indeks untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3004;

--
-- AUTO_INCREMENT untuk tabel `tb_buku`
--
ALTER TABLE `tb_buku`
  MODIFY `id_buku` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1019;

--
-- AUTO_INCREMENT untuk tabel `tb_cart`
--
ALTER TABLE `tb_cart`
  MODIFY `id_cart` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `id_kategori` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tb_kritiksaran`
--
ALTER TABLE `tb_kritiksaran`
  MODIFY `id_saran` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_penerbit`
--
ALTER TABLE `tb_penerbit`
  MODIFY `id_penerbit` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5005;

--
-- AUTO_INCREMENT untuk tabel `tb_penulis`
--
ALTER TABLE `tb_penulis`
  MODIFY `id_penulis` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7006;

--
-- AUTO_INCREMENT untuk tabel `tb_transaksi`
--
ALTER TABLE `tb_transaksi`
  MODIFY `id_transaksi` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
