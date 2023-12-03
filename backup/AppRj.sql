#
# TABLE STRUCTURE FOR: detail_pemeriksaan
#
#
DROP TABLE IF EXISTS `detail_pemeriksaan`;

CREATE TABLE `detail_pemeriksaan` (

  `no_daftar` varchar(10) NOT NULL,
  `kode_tindakan` varchar(5) NOT NULL,
  `nama_tindakan` varchar(40) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000006', 'TN001', '', '-');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000006', 'TN002', '', '-');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000007', '', '', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000007', 'TN001', '', '-');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000007', '', '', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000007', 'TN002', '', 'jj');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000008', 'TN002', '', 'gatau');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000008', 'TN001', '', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000009', 'TN002', '', 'gapunya uang ya?');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000009', 'TN002', '', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000010', 'TN002', '', 'nn');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000010', 'TN001', '', 'jj');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000011', '', '', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000011', '', '', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000011', '', '', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000011', '', '', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000011', 'TN001', '', 'd');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000011', 'TN002', '', '');


#
# TABLE STRUCTURE FOR: dokter
#

DROP TABLE IF EXISTS `dokter`;

CREATE TABLE `dokter` (
  `kode_dokter` varchar(5) NOT NULL,
  `kode_poli` varchar(5) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `sip` text NOT NULL,
  `tarif` int(100) NOT NULL,
  `nomor_telepon` varchar(14) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`kode_dokter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `dokter` (`kode_dokter`, `kode_poli`, `nama_dokter`, `sip`, `tarif`, `nomor_telepon`, `alamat`) VALUES ('D0001', 'KP001', 'Andi Slamet', 'SK-781229-2014', 50000, '085822374567', 'Jl. Bulak Lau Bekasi Utara');
INSERT INTO `dokter` (`kode_dokter`, `kode_poli`, `nama_dokter`, `sip`, `tarif`, `nomor_telepon`, `alamat`) VALUES ('D0002', 'KP002', 'Hana', 'SK-297328-2015', 50000, '085722346512', 'Jl. Pegangsaan Timur Bekasi TImur');
INSERT INTO `dokter` (`kode_dokter`, `kode_poli`, `nama_dokter`, `sip`, `tarif`, `nomor_telepon`, `alamat`) VALUES ('D0003', 'KP002', 'Joni', 'SK-166718-2018', 50000, '085814438921', 'Jl. Mangun Jaya Bekasi Timur');


#
# TABLE STRUCTURE FOR: obat
#

DROP TABLE IF EXISTS `obat`;

CREATE TABLE `obat` (
  `kode_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `jumlah_obat` int(11) NOT NULL,
  `jenis` varchar(40) NOT NULL,
  `satuan` varchar(10) NOT NULL,
  `harga_modal` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`kode_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0001', 'Paracetamol', 160, 'Tablet', 'Strip', 1000, 2000, '2019-08-16', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0002', 'Aspirin', 226, 'Tablet', '', 0, 3500, '2019-08-02', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0003', 'Antasida Doen', 136, 'Tablet', '', 0, 2500, '2019-08-03', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0004', 'Amoxicillin', 1000, 'Tablet', '', 0, 3000, '2019-08-04', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0005', 'PANBADOL', 100, 'Kapsul', '', 1000, 2000, '2019-08-16', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0006', 'paramex', 100, 'Kapsul', 'Pcs', 1000, 1500, '2019-08-16', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0007', 'abc', 10, 'Cair', 'Botol', 500, 750, '2019-08-16', 1);


#
# TABLE STRUCTURE FOR: pasien
#

DROP TABLE IF EXISTS `pasien`;

CREATE TABLE `pasien` (
  `nomor_pasien` varchar(10) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia` int(11) NOT NULL,
  `nomor_telepon` varchar(15) NOT NULL,
  `status_pasien` int(11) NOT NULL,
  PRIMARY KEY (`nomor_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00001', 'dede', 'perempuan', 'Jl. Canon ,Aren Jaya ,Bekasi', '1997-11-04', 22, '08567728383', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00002', 'Andini', 'perempuan', 'Bekasi', '1996-04-18', 23, '085822388193', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00003', 'adi', 'laki-laki', 'Bekasi', '2008-04-11', 11, '085728839019', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00004', 'Febri Rona', 'perempuan', 'Bekasi', '2003-06-18', 13, '085822388291', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00005', 'Hari Fadilah', 'laki-laki', 'Bekasi', '2006-06-14', 13, '085728839019', 1);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00006', 'Heru', 'laki-laki', 'Bekasi', '2012-06-14', 12, '085814438921', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00007', 'Randi Adit', 'laki-laki', 'Bekasi', '1997-06-11', 22, '085728839019', 1);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00008', 'fajri', 'laki-laki', 'jakarta', '2010-10-10', 8, '08989775662', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00009', 'fajrikha', 'laki-laki', 'komplek RSPAD Gatot Subroto', '1998-10-29', 20, '082297382281', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00010', 'abcd', 'laki-laki', 'FINAL', '2010-10-10', 8, '021923', 0);


#
# TABLE STRUCTURE FOR: pembayaran
#

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id_bayar` int(11) NOT NULL AUTO_INCREMENT,
  `no_daftar` varchar(10) NOT NULL,
  `total` int(11) NOT NULL,
  `bayar` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  PRIMARY KEY (`id_bayar`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (1, 'NDFT000002', 131000, 150000, 19000);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (2, 'NDFT000001', 128000, 150000, 22000);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (3, 'NDFT000003', 102000, 120000, 18000);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (4, 'NTDF000004', 92000, 100000, 8000);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (6, 'NTDF000006', 781500, 800000, 18500);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (7, 'NTDF000008', 762500, 1000000, 237500);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (8, 'NTDF000009', 858500, 1000000, 141500);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (9, 'NTDF000010', 759000, 800000, 41000);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (10, 'NTDF000011', 753500, 800000, 46500);


#
# TABLE STRUCTURE FOR: pendaftaran
#

DROP TABLE IF EXISTS `pendaftaran`;

CREATE TABLE `pendaftaran` (
  `no_daftar` varchar(10) NOT NULL,
  `kode_petugas` varchar(5) DEFAULT NULL,
  `kode_poli` varchar(5) NOT NULL,
  `kode_dokter` varchar(5) NOT NULL,
  `nomor_pasien` varchar(10) NOT NULL,
  `tanggal` date NOT NULL,
  `no_antri` int(11) NOT NULL,
  `status` varchar(200) NOT NULL,
  PRIMARY KEY (`no_daftar`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NDFT000001', 'KP002', 'KP001', 'D0001', 'NOPSN00001', '2019-04-23', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NDFT000002', 'KP002', 'KP002', 'D0002', 'NOPSN00002', '2019-04-23', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NDFT000003', 'KP002', 'KP001', 'D0001', 'NOPSN00003', '2019-04-23', 2, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000004', 'KP002', 'KP002', 'D0002', 'NOPSN00004', '2003-06-18', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000006', 'KP002', 'KP001', 'D0001', 'NOPSN00002', '2019-06-21', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000007', 'KP002', 'KP002', 'D0002', 'NOPSN00006', '2019-08-14', 1, 'periksa');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000008', 'KP002', 'KP001', 'D0001', 'NOPSN00008', '2019-08-16', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000009', 'KP002', 'KP001', 'D0001', 'NOPSN00009', '2019-08-17', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000010', 'KP002', 'KP002', 'D0002', 'NOPSN00009', '2019-08-18', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000011', 'KP002', 'KP002', 'D0003', 'NOPSN00010', '2019-08-18', 1, 'selesai');


#
# TABLE STRUCTURE FOR: petugas
#

DROP TABLE IF EXISTS `petugas`;

CREATE TABLE `petugas` (
  `kode_petugas` varchar(5) NOT NULL,
  `nama_petugas` varchar(100) NOT NULL,
  `alamat_petugas` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`kode_petugas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `petugas` (`kode_petugas`, `nama_petugas`, `alamat_petugas`, `username`, `password`, `level`) VALUES ('KP001', 'Fakhri', '-', 'admin', 'admin', 1);
INSERT INTO `petugas` (`kode_petugas`, `nama_petugas`, `alamat_petugas`, `username`, `password`, `level`) VALUES ('KP002', 'Samsul Arifin', 'Jl. Raya Rorotan  Cakung Jakarta Timur', 'samsul', '123', 2);
INSERT INTO `petugas` (`kode_petugas`, `nama_petugas`, `alamat_petugas`, `username`, `password`, `level`) VALUES ('KP003', 'Adi Purnomo', 'Bekasi', 'adi', '123', 3);


#
# TABLE STRUCTURE FOR: poliklinik
#

DROP TABLE IF EXISTS `poliklinik`;

CREATE TABLE `poliklinik` (
  `kode_poli` varchar(5) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `lantai` int(11) NOT NULL,
  PRIMARY KEY (`kode_poli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `poliklinik` (`kode_poli`, `nama_poli`, `lantai`) VALUES ('KP001', 'GIGI', 2);
INSERT INTO `poliklinik` (`kode_poli`, `nama_poli`, `lantai`) VALUES ('KP002', 'UMUM', 1);


#
# TABLE STRUCTURE FOR: rekamedis
#

DROP TABLE IF EXISTS `rekamedis`;

CREATE TABLE `rekamedis` (
  `id_periksa` int(11) NOT NULL AUTO_INCREMENT,
  `no_daftar` varchar(10) NOT NULL,
  `tgl_periksa` date NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  PRIMARY KEY (`id_periksa`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (5, 'NDFT000002', '2019-05-27', 'Rasa Sakit Menelan, Batuk Berdahak, Sakit Perut', 'Radang Tenggorokan , Maag');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (6, 'NDFT000001', '2019-05-27', 'Gusi Sakit', 'Bengkak di Gusi');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (7, 'NDFT000003', '2019-05-27', 'Sakit Kepala , Mual, Panas Ringan', 'Gejala Maag , Demam');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (8, 'NTDF000004', '2019-06-16', 'Batuk', 'Demam, Radang Tenggorokan');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (9, 'NTDF000006', '2019-07-18', 'Sakit Gigi', 'Kerusakan pada gigi');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (10, '', '0000-00-00', '', '');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (11, 'NTDF000007', '2019-08-15', 'SAKIT', 'SAKIT');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (12, 'NTDF000007', '2019-08-15', 'SAKIT', 'SAKIT');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (13, 'NTDF000008', '2019-08-16', 'sakit nih', 'kurang makan');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (14, 'NTDF000009', '2019-08-17', 'sakit perut', 'belum makan');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (15, 'NTDF000010', '2019-08-18', 'vvvvvvvvvvv', 'vvvvvvvvvvvvvvv');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (16, 'NTDF000011', '2019-08-18', 'aa', 'aa');


#
# TABLE STRUCTURE FOR: resep
#

DROP TABLE IF EXISTS `resep`;

CREATE TABLE `resep` (
  `id_resep` int(11) NOT NULL AUTO_INCREMENT,
  `no_daftar` varchar(10) NOT NULL,
  `kode_obat` varchar(5) NOT NULL,
  `banyak` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `subtotal` int(11) NOT NULL,
  `berapa` int(11) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_resep`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (16, 'NDFT000002', 'K0003', 9, 2500, 22500, 3, 'Sebelum Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (17, 'NDFT000002', 'K0004', 9, 3000, 27000, 3, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (21, 'NDFT000001', 'K0002', 12, 3500, 42000, 3, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (22, 'NDFT000001', 'K0004', 12, 3000, 36000, 3, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (23, 'NDFT000003', 'K0002', 12, 3500, 42000, 3, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (24, 'NDFT000003', 'K0003', 4, 2500, 10000, 1, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (25, 'NTDF000004', 'K0002', 12, 3500, 42000, 3, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (26, 'NTDF000006', 'K0002', 9, 3500, 31500, 3, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (27, 'NTDF000008', 'K0001', 2, 1000, 2000, 2, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (28, 'NTDF000008', 'K0002', 3, 3500, 10500, 1, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (29, 'NTDF000009', 'K0006', 3, 1500, 4500, 1, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (30, 'NTDF000009', 'K0001', 2, 2000, 4000, 2, 'Sebelum Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (31, 'NTDF000010', 'K0004', 3, 3000, 9000, 3, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (32, 'NTDF000011', 'K0002', 1, 3500, 3500, 1, 'Sesudah Makan');


#
# TABLE STRUCTURE FOR: tindakan
#

DROP TABLE IF EXISTS `tindakan`;

CREATE TABLE `tindakan` (
  `kode_tindakan` varchar(5) NOT NULL,
  `nama_tindakan` varchar(40) NOT NULL,
  `tarif` int(11) NOT NULL,
  PRIMARY KEY (`kode_tindakan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tindakan` (`kode_tindakan`, `nama_tindakan`, `tarif`) VALUES ('TN001', 'OPK', 300000);
INSERT INTO `tindakan` (`kode_tindakan`, `nama_tindakan`, `tarif`) VALUES ('TN002', 'OPM', 400000);


