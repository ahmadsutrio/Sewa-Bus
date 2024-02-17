-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.6.0.6765
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table balenong.akun
CREATE TABLE IF NOT EXISTS `akun` (
  `idAkun` int(11) NOT NULL AUTO_INCREMENT,
  `namaLengkap` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `nomorHp` varchar(13) NOT NULL,
  `roleAkun` enum('Adminstrator','Pengguna') NOT NULL,
  `jenisKelamin` enum('laki-laki','perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`idAkun`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table balenong.akun: ~17 rows (approximately)
INSERT INTO `akun` (`idAkun`, `namaLengkap`, `email`, `nomorHp`, `roleAkun`, `jenisKelamin`, `alamat`, `password`) VALUES
	(1, 'Ahmad sutrio', 'ahmadsutrio210@gmail.com', '0812', 'Adminstrator', 'laki-laki', 'aa', '$2y$10$CbmfcdsGVNAowIgghMr6N.ot17dZiV0BsCz.GVvStCToHECnfKWKq'),
	(2, 'ADMIN', 'a@gmail.com', '3', 'Pengguna', 'laki-laki', 'e', '$2y$10$p2wJS0lzn9veG7dVNv4mOOFPqBPS66P6HqUYl0gxYBpiz/idYTVnO'),
	(3, 'Kiki', 'kikiaja@gmail.com', '0823', 'Pengguna', 'laki-laki', 'jl.Garuda gg Sepakat', '$2y$10$zoZonI2lyO3MtN6a6cUuDejOgQeaMJBCJF1Bl8XGq.u1SFyHS5h3e'),
	(5, 'gg', 'ag@gmail.com', '08989', 'Pengguna', 'perempuan', 'adasd', '$2y$10$uloSFmFT7mUn11KOqoXamu5Wg8aToxiItkVdi1B8cmlwL8AUIRkyi'),
	(7, 'Wahyu Firmansyah', 'WahyuFirmansyah@gmail.com', '082345678910', 'Pengguna', 'perempuan', 'Sei.pinang', '$2y$10$46c8FtQkGYgSQK1A1qGDzOn8rq0YNayZkMvqCigkbMebASyVzrTFi'),
	(8, 'Risma Apriliaa', 'rismaaprilia@gmail.com', '08882266778', 'Pengguna', 'perempuan', 'Jl.Merpati', '$2y$10$tQCYUJhgmKwkxCb1LXS2hOqE2PZt1jAD4zPdIDlcUGG15dmz2431e'),
	(9, 'SiA', 'siA@gmail.com', '098877', 'Pengguna', 'laki-laki', 'ee', '$2y$10$GJzSG5hGWuq/9SBFXdAogOyb8MKLkM4e1XNWImYVC7J0by/OovTgq'),
	(11, 'Si Ba', 'sib@gmail.com', '4444', 'Pengguna', 'laki-laki', 'jj', '$2y$10$vswVf9TTKlgHbICCAm82gOcopTL4hbHHyQifKz3v1IUUBQfvZ5jYK'),
	(12, 'SiCe', 'sice@gmail.com', '0823456789', 'Pengguna', 'laki-laki', 'yy', '$2y$10$F5mWl6XBCwgxuyxfFS2BduWAQnHSEB5ibksk2BaszHMbZ5zyPD1dq'),
	(13, 'h', 'h@gmail.com', 'h', 'Pengguna', 'laki-laki', 'h', '$2y$10$Gti7re7JoUS6615fWs4EmusPJ2bhIs/vDuXvlyP00EXmyl89vVMUa'),
	(14, 'siEr', 'siEr@gmail.com', '222', 'Pengguna', 'laki-laki', 'ee', '$2y$10$1ZSk5gP/iPVTo6zRImbZO.0gyFsB81HPl4Sf5yV4tEuicj0jLGjhi'),
	(15, 'site', 'site@gmail.com', '44', 'Pengguna', 'laki-laki', 'ee', '$2y$10$RikYdZAIsgw.Wz08lzseiePg8KDEIpBHtV1ugU9WMxf6490Go4GBa'),
	(17, 'sii', 'sii@gmail.com', '88', 'Pengguna', 'laki-laki', 'a', '$2y$10$/1WA5E5oH6NZApJdhfh7tO3zkPBVfRG.Qr0GX/rL/2jZ9C9dH.RqW'),
	(18, 'Syahrul', 'syahrul@gmail.com', '0800', 'Pengguna', 'laki-laki', 'jl garuda, sengai betung', '$2y$10$3ksyz7Fxe0woGo.k/Qt1guSD/KRwTKE/12V49ikpBTPMMWl1yyzPy'),
	(19, 'Sige', 'sige@gmail.com', '333', 'Pengguna', 'laki-laki', 'rr', '$2y$10$PGTeIGqE4zrggzxLOo/ZJOF4Pzv0Aoe4v2zL5jsn6BeGafejaF8yW'),
	(20, 'sief', 'sief@gmail.com', '9999', 'Pengguna', 'laki-laki', 'jl.Garuda', '$2y$10$K7MxqpFjbtmtAX7j7DoiL.HQ.RSA3dqSBeiusvwWwgwbTLDfNGINi'),
	(21, 'suci rahmadiana', 'suci@gmail.com', '082344544', 'Pengguna', 'perempuan', 'jl. garuda, kuok', '$2y$10$IZllAMJpywiemuAjnzFFoeHAPSd3kriKOX61.my7HY5OtuyQsg4HK');

-- Dumping structure for table balenong.bus
CREATE TABLE IF NOT EXISTS `bus` (
  `idBus` int(11) NOT NULL AUTO_INCREMENT,
  `fotoBus` varchar(100) NOT NULL,
  `namaBus` varchar(255) NOT NULL,
  `supirSatu` varchar(255) NOT NULL,
  `supirDua` varchar(255) NOT NULL,
  `kapasitasPenumpang` int(11) NOT NULL,
  `fasilitasBus` enum('AC','-') NOT NULL,
  `hargaSewa` int(11) NOT NULL,
  `statusBus` enum('Tersedia','Diproses','Disewa') NOT NULL,
  PRIMARY KEY (`idBus`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table balenong.bus: ~5 rows (approximately)
INSERT INTO `bus` (`idBus`, `fotoBus`, `namaBus`, `supirSatu`, `supirDua`, `kapasitasPenumpang`, `fasilitasBus`, `hargaSewa`, `statusBus`) VALUES
	(22, '1671885727.png', 'Balenong 02', 'Sukri', 'Suri', 30, 'AC', 1000000, 'Disewa'),
	(23, '1671885745.png', 'Balenong 03', 'Syukuri', 'Supri', 30, 'AC', 1000000, 'Tersedia'),
	(25, '1671885770.png', 'Balenong 04', 'Sukri', 'andri', 30, 'AC', 1000000, 'Tersedia'),
	(28, '1671885784.png', 'Balenong 05', 'Sukri', 'Supri', 30, 'AC', 1000000, 'Tersedia'),
	(29, '1671885809.png', 'Balenong 06', 'Sukri', 'Supri', 30, 'AC', 1000000, 'Tersedia');

-- Dumping structure for table balenong.sewa
CREATE TABLE IF NOT EXISTS `sewa` (
  `idSewa` int(11) NOT NULL AUTO_INCREMENT,
  `lokasiPenjemputan` enum('Bengkinang','Pekanbaru') NOT NULL,
  `idAkun` int(11) NOT NULL,
  `idBus` int(11) NOT NULL,
  `tanggalPergiSewa` date NOT NULL,
  `jumlahHariPenyewaan` int(11) NOT NULL,
  `alamatPenjemputan` text NOT NULL,
  `totalHarga` int(11) NOT NULL,
  `nominalBayar` int(11) NOT NULL,
  `sisaBayar` int(11) NOT NULL,
  `buktiBayar` varchar(100) NOT NULL,
  `statusBayar` enum('Lunas','Belum lunas') NOT NULL,
  `statusSewa` enum('Diproses','Disewa','Kembali') NOT NULL,
  `lokasiTujuan` varchar(100) NOT NULL,
  PRIMARY KEY (`idSewa`),
  KEY `idAkun` (`idAkun`,`idBus`),
  KEY `idBus` (`idBus`),
  CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`idAkun`) REFERENCES `akun` (`idAkun`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`idBus`) REFERENCES `bus` (`idBus`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Dumping data for table balenong.sewa: ~1 rows (approximately)
INSERT INTO `sewa` (`idSewa`, `lokasiPenjemputan`, `idAkun`, `idBus`, `tanggalPergiSewa`, `jumlahHariPenyewaan`, `alamatPenjemputan`, `totalHarga`, `nominalBayar`, `sisaBayar`, `buktiBayar`, `statusBayar`, `statusSewa`, `lokasiTujuan`) VALUES
	(40, 'Pekanbaru', 8, 22, '2023-09-13', 2, '3sdasd', 5000000, 5000000, 0, '1694487881.png', 'Lunas', 'Disewa', 'serer');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
