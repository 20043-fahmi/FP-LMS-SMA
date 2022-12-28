-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Des 2022 pada 13.12
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sistem_akademik`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `tgl` date NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id`, `nama`, `tgl`, `deskripsi`) VALUES
(1, 'Milad Ke 19', '2022-12-30', 'Acara ini Untuk Memperingati Hari Ulang Tahun SMAN 1 Jakenan Yang Telah Berdi selama 19 Tahun'),
(2, 'Upacara 17 Agustus', '2022-12-01', 'Kami Mengundang Beberapa Artis Ternama Utuk memeriahkan Acara kali ini');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `id` int(11) NOT NULL,
  `nip` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `alamat` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `gender` enum('L','P') NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `no_telp` varchar(14) NOT NULL,
  `email` varchar(30) NOT NULL,
  `agama` enum('Islam','Hindu','Budha','Kristen','Lainya') NOT NULL,
  `foto` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `alamat`, `tgl_lahir`, `gender`, `tempat_lahir`, `no_telp`, `email`, `agama`, `foto`) VALUES
(1, 2920822, 'Umi Mahdia', ' Ciracas, jakarta TImur', '1987-12-07', 'P', 'Cilacap', '0819227111', 'umimm@gmail.com', 'Islam', 'umi.jpg'),
(2, 201928112, 'Danang Jayadi', 'Karanganyar Ngaliyan, Karanganyar, Kec. Tugu, Kota Semarang, Jawa Tengah.', '1978-12-14', 'L', 'Karanganyar', '08176251721', 'danangS08@gmail.com', 'Hindu', 'danang.jpg'),
(3, 230183819, 'Yusi Sari Estiani', 'JALAN CUT MEUTIA NO. 23 KP. BARU. KECAMATAN BAITURRAHMAN KOTA BANDA ACEH', '1976-12-01', 'P', 'Aceh', '019972718', 'yusi123@gmail.com', 'Islam', 'Yusi Sari Estiani.png'),
(4, 1283921, 'Bagas Wijaya', 'Kelurahan Citeureup, Kecamatan Cimahi Utara, Kota Cimahi', '2002-12-13', 'L', 'Cimahi', '018271928', 'bagasWj08@gmail.com', 'Kristen', 'Bagas Wijaya.jpg'),
(5, 20123882, 'Ardi Sanjaya', 'Kepung, Kampung Baru, kec.Puncu', '2022-12-14', 'L', 'Kepung', '0817263612', 'ardisanjayaa@gmial.com', 'Islam', 'Ardi Sanjaya.png'),
(6, 20192819, 'Jayadi harlan', 'ds.Purwokerto Bangkalan Jogja', '2022-12-09', 'L', 'Jogja', '08173626112', 'jay76@gmail.com', 'Kristen', 'guru-20192819.jpg'),
(9, 18392, 'Johana', 'Ds. Sugih Waras Kab. Nganjuk', '2022-12-28', 'L', 'Nganjuk', '08127363', 'johana@gmail.com', 'Budha', 'guru-18392.jpg'),
(11, 2013024431, 'Rendi Kurniawan', 'Jombang Jawatimur', '2022-12-08', 'L', 'Jombang', '081330900823', 'rendi@gmail.com', 'Kristen', 'guru-2013024431.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id` int(11) NOT NULL,
  `Hari` enum('Senin','Selasa','Rabu','Kamis','Jumat','Sabtu','Minggu') NOT NULL,
  `Jam` varchar(30) NOT NULL,
  `Mapel` varchar(45) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `kelas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id`, `Hari`, `Jam`, `Mapel`, `guru_id`, `kelas_id`) VALUES
(3, 'Selasa', '07.00 - 08.00', 'OlahRaga', 4, 11),
(4, 'Selasa', '09.00 - 10.00', 'Matematika', 3, 1),
(5, 'Senin', '07.00 - 08.00', 'OlahRaga', 6, 1),
(6, 'Senin', '08.00 - 09.30', 'Bahasa Indonesia', 1, 1),
(7, 'Senin', '10.30 - 12.00', 'Sejarah Bahasa Indonesia', 1, 1),
(20, 'Selasa', '11.00 - 12.00', 'Penjaskes', 6, 11),
(23, 'Jumat', '07.00 - 08.00', 'Matematika', 1, 10),
(25, 'Rabu', '09.30 - 12.00', 'karate', 5, 12);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id` int(11) NOT NULL,
  `kelas` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id`, `kelas`) VALUES
(1, 'X-BI'),
(2, 'X-IPA'),
(3, 'X-IPS'),
(4, 'XI-BI'),
(5, 'XI-IPA'),
(6, 'XI-IPS'),
(7, 'XI-Penjas'),
(14, 'XII - SAINS'),
(8, 'XII-BI'),
(9, 'XII-IPA'),
(10, 'XII-IPS'),
(11, 'XII-Penjas'),
(13, 'XII-TKJ'),
(12, 'XIII-Penjas');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE `nilai` (
  `id` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `guru_id` int(11) NOT NULL,
  `tugas_id` int(11) NOT NULL,
  `siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id`, `nilai`, `perihal`, `guru_id`, `tugas_id`, `siswa_id`) VALUES
(1, 80, 'Uts BI', 1, 2, 1),
(2, 76, 'Tugas Hari', 2, 4, 2),
(4, 90, 'UAS Bahasa Indonesia', 2, 2, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL,
  `NIS` int(11) NOT NULL,
  `nama_siswa` varchar(20) NOT NULL,
  `tempat_lahir` tinytext NOT NULL,
  `jenis_kelamin` enum('L','P') NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` enum('Islam','Hindu','Khatolik','Budha','Kristen','Lainya') NOT NULL,
  `alamat` text NOT NULL,
  `status_siswa` enum('Lulus','Aktif','Pindah','Keluar') NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `kelas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id`, `NIS`, `nama_siswa`, `tempat_lahir`, `jenis_kelamin`, `tgl_lahir`, `agama`, `alamat`, `status_siswa`, `foto`, `created_at`, `updated_at`, `kelas_id`) VALUES
(1, 2019283, 'Ricky Agung Sumirant', 'Nganjuk', 'L', '2022-12-01', 'Islam', 'Ds. Tanjung Tani, Kec.Prambon', 'Lulus', '2019283-Ricky Agung Sumirant.jpg', '2022-12-14 04:25:33', '2022-12-12 04:25:33', 1),
(2, 201928312, 'Baharudin', 'Ngawi', 'L', '2022-12-02', 'Islam', 'Ngawi, Kabupaten Ngawi. Alamat : Jl. Teuku Umar', 'Aktif', '201928312-Baharudin.jpg', '2022-12-01 04:40:53', '2022-12-01 04:40:53', 1),
(4, 10292839, 'Hilda Nathaniela ', 'Kediri', 'P', '2022-12-15', 'Kristen', 'Jl. Raya Gayam No.2', 'Aktif', NULL, '2022-12-27 04:46:22', '2022-12-20 04:46:22', 13),
(5, 1293032, 'Maulana Alif Anugrah', 'Jombang', 'P', '2022-12-22', 'Hindu', 'Jl. Duren 3 Jombang', 'Aktif', NULL, '2022-12-22 04:46:22', '2022-12-16 04:46:22', 13),
(6, 98765432, 'hanisa putri', 'jakarta', 'P', '2022-12-07', 'Hindu', 'Jl. pamenang jakarta pusat', 'Aktif', NULL, '2022-12-23 04:52:54', '2022-12-23 04:52:54', 13),
(7, 765432212, 'izan mehendra', 'purworejo', 'L', '2022-12-08', 'Islam', 'tulungagung jl. sudimoro', 'Aktif', NULL, '2022-12-22 04:52:54', '2022-12-29 04:52:54', 13);

-- --------------------------------------------------------

--
-- Struktur dari tabel `spp`
--

CREATE TABLE `spp` (
  `id` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `total` int(11) NOT NULL,
  `kurang` int(11) DEFAULT NULL,
  `siswa_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `spp`
--

INSERT INTO `spp` (`id`, `tanggal`, `total`, `kurang`, `siswa_id`) VALUES
(1, '2022-12-02', 600000, 0, 1),
(2, '2023-01-01', 200000, 0, 2),
(11, '2022-12-16', 200000, 0, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugas`
--

CREATE TABLE `tugas` (
  `id` int(11) NOT NULL,
  `perihal` varchar(20) DEFAULT NULL,
  `jam` varchar(20) NOT NULL,
  `hari` varchar(20) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` text NOT NULL,
  `upload` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tugas`
--

INSERT INTO `tugas` (`id`, `perihal`, `jam`, `hari`, `tanggal`, `keterangan`, `upload`) VALUES
(2, 'UTS BI', '11.00-12.00', 'Senin', '2022-12-05', 'UAS Bahasa Indonesia', 'UTS BI.jpg'),
(4, 'Tugas Harian', '07.00 - 21.00', 'Selasa', '2022-12-07', 'Kerjakan Matematika Halam 19', 'tugas-ulangan.pdf'),
(5, 'UAS', '10.00 - 12.00', 'Selasa', '2022-12-08', 'Kerjakan Yang ada pada word', 'tugas-UAS.docx'),
(10, 'Quis', '07.00 - 08.00', 'Rabu', '2022-12-08', 'Kerjakan Modul IPA Hal 17', 'tugas-Quis.png'),
(11, 'UAS', '07.00 - 21.00', 'Rabu', '2022-12-27', 'Kerjakan Latihan IPA modul Hal 18', 'UAS.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isactive` enum('yes','no','banned') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `role` enum('administrator','staff','guru','siswa') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `isactive`, `role`, `created_at`, `updated_at`) VALUES
(1, 'nov', 'jsdhd@gmail.com', NULL, '$2y$10$PnyY1EotRyB7ORWSblNEI.VlkSHW/cUET4BS7kEc7KMiDWzvhtuxy', NULL, 'yes', 'guru', '2022-11-12 15:54:01', '2022-11-12 15:54:01'),
(2, 'zainab', 'zaenab_imoet@gmail.com', NULL, '$2y$10$Hdr1vzkvzr8dOrAOXqyWBuKdX61pC4w/e1IiOMFkBzAphOgYO6s1a', NULL, 'no', 'staff', '2022-11-16 17:59:22', '2022-11-16 17:59:22'),
(3, 'putri', 'putri@gmail.com', NULL, '$2y$10$sucMc3/LT0RNsM/L2qfss.OGOZEYl5BV2x0Q5.bOUGroDUNlvQEgG', NULL, 'no', 'siswa', '2022-11-18 23:20:01', '2022-11-18 23:20:01'),
(4, 'siti', 'siti@gmail.com', NULL, '$2y$10$1A7f9TWuzx5Spl.lZSznVeJkxBqgkchq7RzMPgc.oR30zxOsACtc.', NULL, 'yes', 'guru', '2022-11-18 23:20:59', '2022-11-18 23:20:59'),
(5, 'siska', 'siska@gmail.com', NULL, '$2y$10$XjdrEHdM2gyaZKP44jOtcepzzwGZjTcyxvyHgUmxn.jWx1lOpLytC', NULL, 'no', 'administrator', '2022-11-19 00:26:48', '2022-11-19 00:26:48'),
(6, 'lukman', 'lukman@gmail.com', NULL, '$2y$10$9YE33tCFqdgMYrIRbFgLFOA/DTTO716GiF9P46/vtDwBiyF3pcS3K', NULL, 'no', 'administrator', '2022-11-19 11:43:55', '2022-11-19 11:43:55'),
(7, 'Ricky', 'admin@gmail.com', NULL, '$2y$10$3kO2wnFHFwvS74WrF00svODFq2wp0ZbGXmhWfNeTabUgSJYZMoi1C', NULL, 'no', 'administrator', '2022-11-27 01:18:23', '2022-11-27 01:18:23'),
(8, 'Shinta', 'siswa@gmail.com', NULL, '$2y$10$i8js3NXkl9b5QRTpbqIxsOpilEiTnS7y2a1G1Jw93NbZLLJ5bsHH6', NULL, 'no', 'siswa', '2022-12-10 17:01:09', '2022-12-10 17:01:09'),
(11, 'Fahmi', 'guru@gmail.com', NULL, '$2y$10$BBjUpcVpnK/qN3IfWumdT.LZb29VK4xO/nP9tXHnbzBFTLqM4SNlW', NULL, 'no', 'guru', '2022-12-22 04:06:13', '2022-12-22 04:06:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `nip_UNIQUE` (`nip`),
  ADD UNIQUE KEY `no_telp_UNIQUE` (`no_telp`),
  ADD UNIQUE KEY `email_UNIQUE` (`email`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_jadwal_guru1_idx` (`guru_id`),
  ADD KEY `fk_jadwal_kelas1_idx` (`kelas_id`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `kelas_UNIQUE` (`kelas`);

--
-- Indeks untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_nilai_guru1_idx` (`guru_id`),
  ADD KEY `fk_nilai_tugas1_idx` (`tugas_id`),
  ADD KEY `fk_nilai_siswa1_idx` (`siswa_id`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `NISN_UNIQUE` (`NIS`),
  ADD KEY `fk_siswa_kelas1_idx` (`kelas_id`);

--
-- Indeks untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD KEY `fk_spp_siswa1_idx` (`siswa_id`);

--
-- Indeks untuk tabel `tugas`
--
ALTER TABLE `tugas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `siswa`
--
ALTER TABLE `siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `spp`
--
ALTER TABLE `spp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `tugas`
--
ALTER TABLE `tugas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `fk_jadwal_guru1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_jadwal_kelas1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `fk_nilai_guru1` FOREIGN KEY (`guru_id`) REFERENCES `guru` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nilai_siswa1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_nilai_tugas1` FOREIGN KEY (`tugas_id`) REFERENCES `tugas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `fk_siswa_kelas1` FOREIGN KEY (`kelas_id`) REFERENCES `kelas` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `spp`
--
ALTER TABLE `spp`
  ADD CONSTRAINT `fk_spp_siswa1` FOREIGN KEY (`siswa_id`) REFERENCES `siswa` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
