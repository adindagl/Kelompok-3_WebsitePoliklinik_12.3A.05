#
# TABLE STRUCTURE FOR: detail_pemeriksaan
#

DROP TABLE IF EXISTS `detail_pemeriksaan`;

CREATE TABLE `detail_pemeriksaan` (
  `no_daftar` varchar(10) NOT NULL,
  `kode_tindakan` varchar(5) NOT NULL,
  `nama_tindakan` varchar(40) NOT NULL,
  `ket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000003', 'TN003', 'USG', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000001', 'TN006', 'Tambal Gigi', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000002', 'TN004', 'Rawat Inap', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000004', 'TN005', 'Cabut Gigi', '');
INSERT INTO `detail_pemeriksaan` (`no_daftar`, `kode_tindakan`, `nama_tindakan`, `ket`) VALUES ('NTDF000005', 'TN004', 'Rawat Inap', '');


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `dokter` (`kode_dokter`, `kode_poli`, `nama_dokter`, `sip`, `tarif`, `nomor_telepon`, `alamat`) VALUES ('D0001', 'KP001', 'Ririn', 'SK-781229-2014', 50000, '085822374567', 'Jl. Janji Manis, Bekasi Utara');
INSERT INTO `dokter` (`kode_dokter`, `kode_poli`, `nama_dokter`, `sip`, `tarif`, `nomor_telepon`, `alamat`) VALUES ('D0002', 'KP002', 'Benson Oberhard', 'SK-297328-2015', 50000, '085722346512', 'Jl. Kalimantan, Bekasi TImur');
INSERT INTO `dokter` (`kode_dokter`, `kode_poli`, `nama_dokter`, `sip`, `tarif`, `nomor_telepon`, `alamat`) VALUES ('D0003', 'KP002', 'Mulyanto', 'SK-166718-2018', 50000, '085814438921', 'Jl. Halu Mulu, Bekasi Timur');
INSERT INTO `dokter` (`kode_dokter`, `kode_poli`, `nama_dokter`, `sip`, `tarif`, `nomor_telepon`, `alamat`) VALUES ('D0004', 'KP001', 'Anika ', 'SK-643765-2017', 50000, '08124754539', 'Jl. Patah Cinta, Bekasi Selatan');
INSERT INTO `dokter` (`kode_dokter`, `kode_poli`, `nama_dokter`, `sip`, `tarif`, `nomor_telepon`, `alamat`) VALUES ('D0005', 'KP003', 'Chelsea Angelina', 'SK-582623-2018', 50000, '082151212785', 'Jl. Kapan Move on, Jakarta');


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0001', 'Paracetamol', 160, 'Tablet', 'Strip', 1000, 2000, '2019-08-16', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0002', 'Aspirin', 226, 'Tablet', '', 0, 3500, '2019-08-02', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0003', 'Antasida Doen', 136, 'Tablet', '', 0, 2500, '2019-08-03', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0004', 'Amoxicillin', 1000, 'Tablet', '', 0, 3000, '2019-08-04', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0005', 'Panadol', 100, 'Kapsul', '', 1000, 2000, '2019-08-16', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0006', 'paramex', 100, 'Kapsul', 'Pcs', 1000, 1500, '2019-08-16', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0007', 'abc', 10, 'Cair', 'Botol', 500, 750, '2019-08-16', 1);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0008', 'Ibu profen', 350, 'Tablet', 'Strip', 3200, 4800, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0009', 'Cataflam', 300, 'Tablet', 'Strip', 7000, 10500, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0010', 'Ponstan', 300, 'Tablet', 'Strip', 3500, 5250, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0011', 'Promag', 300, 'tablet', 'strip', 8000, 12000, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0012', 'Mylanta', 250, 'Cair', 'Botol', 13000, 19500, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0013', 'Vermint', 250, 'Kapsul', 'Botol', 15000, 22500, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0014', 'Floxigra', 300, 'kaplet', 'strip', 1500, 2250, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0015', 'Vosedon', 250, 'cair', 'botol', 40000, 60000, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0016', 'Tride', 300, 'Kapsul', 'Strip', 25000, 37500, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0017', 'Blackmores', 250, 'Kapsul', 'Botol', 100000, 150000, '2023-12-02', 0);
INSERT INTO `obat` (`kode_obat`, `nama_obat`, `jumlah_obat`, `jenis`, `satuan`, `harga_modal`, `harga`, `tgl_masuk`, `status`) VALUES ('K0018', 'Folamil Genio', 250, 'Kapsul', 'Botol', 120000, 180000, '2023-12-02', 0);


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00001', 'dina', 'perempuan', 'Jl. Bangka, Aren Jaya, Bekasi', '1997-11-04', 26, '085677283891', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00002', 'Farhan Haryanto', 'laki-laki', 'Bekasi', '2006-06-14', 17, '085728839019', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00003', 'Ani', 'perempuan', 'Tambun', '2003-06-18', 20, '085822388291', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00004', 'Vivi', 'perempuan', 'Jl. Kaliabang Tengah', '2002-09-02', 21, '089756523378', 0);
INSERT INTO `pasien` (`nomor_pasien`, `nama_pasien`, `jenis_kelamin`, `alamat`, `tanggal_lahir`, `usia`, `nomor_telepon`, `status_pasien`) VALUES ('NOPSN00005', 'Ervan', 'laki-laki', 'Bekasi', '1997-11-03', 26, '085728839019', 0);


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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (1, 'NTDF000001', 305000, 305000, 0);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (2, 'NTDF000002', 213500, 213500, 0);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (3, 'NTDF000003', 280000, 280000, 0);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (4, 'NTDF000004', 294500, 294500, 0);
INSERT INTO `pembayaran` (`id_bayar`, `no_daftar`, `total`, `bayar`, `kembali`) VALUES (5, 'NTDF000005', 237500, 237500, 0);


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000001', 'KP002', 'KP001', 'D0001', 'NOPSN00001', '2023-12-03', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000002', 'KP002', 'KP002', 'D0003', 'NOPSN00002', '2023-12-03', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000003', 'KP002', 'KP003', 'D0005', 'NOPSN00003', '2023-12-03', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000004', 'KP002', 'KP001', 'D0004', 'NOPSN00004', '2023-12-03', 1, 'selesai');
INSERT INTO `pendaftaran` (`no_daftar`, `kode_petugas`, `kode_poli`, `kode_dokter`, `nomor_pasien`, `tanggal`, `no_antri`, `status`) VALUES ('NTDF000005', 'KP002', 'KP002', 'D0002', 'NOPSN00005', '2023-12-03', 1, 'selesai');


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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `petugas` (`kode_petugas`, `nama_petugas`, `alamat_petugas`, `username`, `password`, `level`) VALUES ('KP001', 'Adinda', '-', 'admin', 'admin', 1);
INSERT INTO `petugas` (`kode_petugas`, `nama_petugas`, `alamat_petugas`, `username`, `password`, `level`) VALUES ('KP002', 'Dhea', 'Puri Cendana,Tambun', 'dhea', '123', 2);
INSERT INTO `petugas` (`kode_petugas`, `nama_petugas`, `alamat_petugas`, `username`, `password`, `level`) VALUES ('KP003', 'Grasela', 'Bekasi', 'sela', '123', 3);


#
# TABLE STRUCTURE FOR: poliklinik
#

DROP TABLE IF EXISTS `poliklinik`;

CREATE TABLE `poliklinik` (
  `kode_poli` varchar(5) NOT NULL,
  `nama_poli` varchar(100) NOT NULL,
  `lantai` int(11) NOT NULL,
  PRIMARY KEY (`kode_poli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `poliklinik` (`kode_poli`, `nama_poli`, `lantai`) VALUES ('KP001', 'GIGI', 2);
INSERT INTO `poliklinik` (`kode_poli`, `nama_poli`, `lantai`) VALUES ('KP002', 'UMUM', 1);
INSERT INTO `poliklinik` (`kode_poli`, `nama_poli`, `lantai`) VALUES ('KP003', 'Kebidanan dan Kandungan', 3);


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
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (1, 'NTDF000001', '2023-12-03', 'Sakit gigi', 'Gigi berlubang');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (2, 'NTDF000002', '2023-12-03', 'lemas, mual dan muntah, demam', 'tifus');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (3, 'NTDF000003', '2023-12-03', 'Mual,telat haid,mood swing', 'hamil');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (4, 'NTDF000004', '2023-12-03', 'Gigi goyang, sakit', 'Gigi berlubang');
INSERT INTO `rekamedis` (`id_periksa`, `no_daftar`, `tgl_periksa`, `keluhan`, `diagnosa`) VALUES (5, 'NTDF000005', '2023-12-03', 'muntah terus menerus, demam tinggi, sakit perut ', 'Demam Berdarah');


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
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (33, 'NTDF000001', 'K0009', 10, 10500, 105000, 3, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (34, 'NTDF000002', 'K0014', 6, 2250, 13500, 2, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (35, 'NTDF000003', 'K0018', 1, 180000, 180000, 1, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (36, 'NTDF000004', 'K0010', 10, 5250, 52500, 3, 'Sesudah Makan');
INSERT INTO `resep` (`id_resep`, `no_daftar`, `kode_obat`, `banyak`, `harga`, `subtotal`, `berapa`, `ket`) VALUES (37, 'NTDF000005', 'K0016', 1, 37500, 37500, 1, 'Sesudah Makan');


#
# TABLE STRUCTURE FOR: tindakan
#

DROP TABLE IF EXISTS `tindakan`;

CREATE TABLE `tindakan` (
  `kode_tindakan` varchar(5) NOT NULL,
  `nama_tindakan` varchar(40) NOT NULL,
  `tarif` int(11) NOT NULL,
  PRIMARY KEY (`kode_tindakan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

INSERT INTO `tindakan` (`kode_tindakan`, `nama_tindakan`, `tarif`) VALUES ('TN001', 'Hecting', 100000);
INSERT INTO `tindakan` (`kode_tindakan`, `nama_tindakan`, `tarif`) VALUES ('TN002', 'Persalinan', 500000);
INSERT INTO `tindakan` (`kode_tindakan`, `nama_tindakan`, `tarif`) VALUES ('TN003', 'USG', 50000);
INSERT INTO `tindakan` (`kode_tindakan`, `nama_tindakan`, `tarif`) VALUES ('TN004', 'Rawat Inap', 150000);
INSERT INTO `tindakan` (`kode_tindakan`, `nama_tindakan`, `tarif`) VALUES ('TN005', 'Cabut Gigi', 150000);
INSERT INTO `tindakan` (`kode_tindakan`, `nama_tindakan`, `tarif`) VALUES ('TN006', 'Tambal Gigi', 150000);
INSERT INTO `tindakan` (`kode_tindakan`, `nama_tindakan`, `tarif`) VALUES ('TN007', 'Scalling', 250000);


