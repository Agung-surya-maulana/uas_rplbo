-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2021 at 02:13 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas_rplbo`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrasi`
--

CREATE TABLE `administrasi` (
  `id` int(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_peserta` int(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrasi`
--

INSERT INTO `administrasi` (`id`, `nama`, `no_peserta`, `status`) VALUES
(1, 'muhammad al hafis', 657456, 'Lulus'),
(2, 'kokobajuri', 332211, 'Lulus'),
(3, 'juan firmansyah', 234354, 'Lulus'),
(4, 'tata permata', 876437, 'Lulus'),
(5, 'boni dobi', 435654, 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` enum('admin','siswa','panitia') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `email`, `username`, `password`, `level`) VALUES
(1, 'muhammad al hafis', '657456', 'Lulus', ''),
(2, 'panitia@gmail.com', 'panitia1', 'panitia', 'panitia'),
(3, 'muhammadalhafis15@gail.com', 'hafis', '123456', 'siswa'),
(5, '11850112455@students.uin-suska', 'panitia2', 'panitia', 'panitia'),
(95, 'dodi@gmail.com', 'dodi', '123', 'siswa');

-- --------------------------------------------------------

--
-- Table structure for table `bukti_pembayaran`
--

CREATE TABLE `bukti_pembayaran` (
  `id` int(11) NOT NULL,
  `bukti_pembayaran` varchar(255) NOT NULL,
  `tipe_gambar` varchar(255) NOT NULL,
  `ukuran_gambar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` int(255) NOT NULL,
  `informasi` longtext NOT NULL,
  `waktu` longtext NOT NULL,
  `lokasi` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `informasi`, `waktu`, `lokasi`) VALUES
(1, 'Selamat datang kepada calon siswa SMK Global Cendekia, Pendaftaran akan dilakukan sesusai dengan prosedur yang ada. Diharapkan para calon siswa dapat mengisi data - data yang diperlukan pada batas waktu yang telah ditentukan.', 'WAKTU REGISTRASI: 5 - 11 Juni 2021.', 'Alamat: Kualu Nenas, Kec. Tambang, Kabupaten Kampar, Riau 28464');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_peserta` int(30) NOT NULL,
  `nilai` int(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `nama`, `no_peserta`, `nilai`, `status`) VALUES
(4, 'muhammad al hafis', 657456, 95, 'Lulus'),
(6, 'kokobajuri', 332211, 80, 'Lulus'),
(7, 'juan firmansyah', 234354, 85, 'Lulus'),
(8, 'tata permata', 876437, 70, 'Lulus'),
(9, 'boni dobi', 435654, 45, 'Lulus');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `id` int(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` int(100) NOT NULL,
  `kewarganegaraan` varchar(100) NOT NULL,
  `nomor_hp` int(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_tinggal` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `desa_kelurahan` varchar(30) NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `kode_pos` int(30) NOT NULL,
  `jarak_tinggal` varchar(30) NOT NULL,
  `waktu_tempuh` varchar(30) NOT NULL,
  `jenis_transportasi` varchar(30) NOT NULL,
  `anak_ke` varchar(30) NOT NULL,
  `jumlah_saudara` varchar(30) NOT NULL,
  `tinggi_badan` varchar(30) NOT NULL,
  `berat_badan` varchar(30) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `asal_sekolah` varchar(30) NOT NULL,
  `nisn` int(30) NOT NULL,
  `nis` int(30) NOT NULL,
  `no_ijazah` int(30) NOT NULL,
  `no_skhun` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`id`, `nama`, `nik`, `kewarganegaraan`, `nomor_hp`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `tempat_tinggal`, `kecamatan`, `desa_kelurahan`, `dusun`, `kode_pos`, `jarak_tinggal`, `waktu_tempuh`, `jenis_transportasi`, `anak_ke`, `jumlah_saudara`, `tinggi_badan`, `berat_badan`, `jurusan`, `asal_sekolah`, `nisn`, `nis`, `no_ijazah`, `no_skhun`) VALUES
(1, 'muhammad al hafis', 12313, 'indonesia', 2147483647, 'laki-laki', 'dumai', '2020-12-29', 'jalan delima', 'Kecamatan Tampan', 'bunga tanjung', 'kijang merah', 1231, '5km', '10 menit', 'sepeda motor', '1', '3', '169cm', '50kg', 'ipa', 'smpn 2 dumai', 312442, 24234, 314135, 3532),
(2, 'kokobajuri', 2147483647, 'indonesia', 2147483647, 'laki-laki', 'kampar', '2021-02-02', 'panam', 'batu angin', 'api', 'air', 13452, '8 km', '15 menit', 'motor', '2', '2', '170 cm', '75 kg', 'ipa', 'smp 1 bangkinang', 332435, 32332, 32343, 44332);

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE `wali` (
  `id` int(30) NOT NULL,
  `nama_wali` varchar(30) NOT NULL,
  `nik_wali` int(30) NOT NULL,
  `nohp_wali` int(30) NOT NULL,
  `tempat_lahirwali` varchar(30) NOT NULL,
  `tanggal_lahirwali` date NOT NULL,
  `pendidikan_wali` varchar(30) NOT NULL,
  `pekerjaan_wali` varchar(30) NOT NULL,
  `penghasilan_wali` varchar(30) NOT NULL,
  `kebutuhan_khusus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wali`
--

INSERT INTO `wali` (`id`, `nama_wali`, `nik_wali`, `nohp_wali`, `tempat_lahirwali`, `tanggal_lahirwali`, `pendidikan_wali`, `pekerjaan_wali`, `penghasilan_wali`, `kebutuhan_khusus`) VALUES
(1, 'Mulyono Ngadio', 12344233, 2147483647, 'pekanbaru', '2021-01-18', 's1', 'pns', 'Rp.6.000.000', 'tidak ada'),
(2, 'surni tustati', 21323, 2147483647, 'pekanbaru', '2021-02-02', 's1', 'pns', 'Rp.6.000.000', 'tidak ada');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrasi`
--
ALTER TABLE `administrasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrasi`
--
ALTER TABLE `administrasi`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `bukti_pembayaran`
--
ALTER TABLE `bukti_pembayaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wali`
--
ALTER TABLE `wali`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
