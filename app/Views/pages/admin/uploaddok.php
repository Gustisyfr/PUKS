<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="my-4">Upload Dokumen</h2>
            <form action="<?= base_url('/admin/uploaddok/save'); ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <!-- unit organisasi -->
                <div class="form-group mb-3">
                    <label for="unit_organisasi" class="form-label">Unit Organisasi Pelaksana</label>
                    <select class="form-select" id="unit_organisasi" name="unit_organisasi" aria-label="Default select example" required>
                        <option value="">Pilih Unit Organisasi Pelaksana</option>
                        <option value="Sekretariat Jendral">Sekretariat Jendral</option>
                        <option value="Direktorat Jenderal Pengelolaan Kelautan dan Ruang Laut">Direktorat Jenderal Pengelolaan Kelautan dan Ruang Laut</option>
                        <option value="Direktorat Jenderal Perikanan Tangkap">Direktorat Jenderal Perikanan Tangkap</option>
                        <option value="Direktorat Jenderal Perikanan Budidaya">Direktorat Jenderal Perikanan Budidaya</option>
                        <option value="Direktorat Jenderal Penguatan Daya Saing Produk Kelautan dan Perikanan">Direktorat Jenderal Penguatan Daya Saing Produk Kelautan dan Perikanan</option>
                        <option value="Direktorat Jenderal Pengawasan Sumber Daya Kelautan dan Perikanan">Direktorat Jenderal Pengawasan Sumber Daya Kelautan dan Perikanan</option>
                        <option value="Inspektorat Jenderal">Inspektorat Jenderal</option>
                        <option value="Badan Penyuluhan dan Pengembangan Sumber Daya Manusia Kelautan dan Perikanan">Badan Penyuluhan dan Pengembangan Sumber Daya Manusia Kelautan dan Perikanan</option>
                        <option value="Badan Pengendalian dan Pengawasan Mutu Hasil Kelautan dan Perikanan">Badan Pengendalian dan Pengawasan Mutu Hasil Kelautan dan Perikanan</option>
                    </select>
                </div>
                <!-- hidden dropdown satker/upt -->
                <div class="form-group mb-3 hidden-dropdown" id="setjenDropdown" style="display: none;">
                    <label for="setjenSelect" class="form-label">Satker Sekretariat Jendral</label>
                    <select name="satker_upt_1" class="form-select" id="setjenSelect" aria-label="Default select example">
                        <option value="">Pilih Satker Sekretariat Jendral</option>
                        <!-- ESELON II -->
                        <option value="Biro Perencanaan">Biro Perencanaan</option>
                        <option value="Biro Keuangan dan Barang Milik Negara">Biro Keuangan dan Barang Milik Negara</option>
                        <option value="Biro Sumber Daya Manusia Aparatur dan Organisasi">Biro Sumber Daya Manusia Aparatur dan Organisasi</option>
                        <option value="Biro Hukum">Biro Hukum</option>
                        <option value="Biro Hubungan Masyarakat dan Kerja Sama Luar Negeri">Biro Hubungan Masyarakat dan Kerja Sama Luar Negeri</option>
                        <option value="Biro Umum dan Pengadaan Barang/Jasa">Biro Umum dan Pengadaan Barang/Jasa</option>
                    </select>
                </div>
                <div class="form-group mb-3 hidden-dropdown" id="djprlDropdown" style="display: none;">
                    <label for="djprlSelect" class="form-label">Satker/UPT Direktorat Jenderal Pengelolaan Kelautan dan Ruang Laut</label>
                    <select name="satker_upt_2" class="form-select" id="djprlSelect" aria-label="Default select example">
                        <option value="">Pilih Satker/UPT Direktorat Jenderal Pengelolaan Kelautan dan Ruang Laut</option>
                        <!-- ESELON II -->
                        <option value="Sekretariat Direktorat Jenderal Pengelolaan Kelautan dan Ruang Laut">Sekretariat Direktorat Jenderal Pengelolaan Kelautan dan Ruang Laut</option>
                        <option value="Direktorat Penataan Ruang Laut">Direktorat Penataan Ruang Laut</option>
                        <option value="Direktorat Pendayagunaan Pesisir dan Pulau-Pulau Kecil">Direktorat Pendayagunaan Pesisir dan Pulau-Pulau Kecil</option>
                        <option value="Direktorat jasa Kelautan">Direktorat jasa Kelautan</option>
                        <option value="Direktorat Konservasi Ekosistem dan Biota Perairan">Direktorat Konservasi Ekosistem dan Biota Perairan</option>
                        <!-- UPT -->
                        <option value="Balai Pengelolaan SD Pesisir & Laut Padang">Balai Pengelolaan SD Pesisir & Laut Padang</option>
                        <option value="Balai Pengelolaan SD Pesisir & Laut Pontianak">Balai Pengelolaan SD Pesisir & Laut Pontianak</option>
                        <option value="Balai Pengelolaan SD Pesisir & Laut Makasar">Balai Pengelolaan SD Pesisir & Laut Makasar</option>
                        <option value="Balai Pengelolaan SD Pesisir & Laut Denpasar">Balai Pengelolaan SD Pesisir & Laut Denpasar</option>
                        <option value="Balai Pengelolaan SD Pesisir & Laut Sorong">Balai Pengelolaan SD Pesisir & Laut Sorong</option>
                        <option value="Balai Kawasan Konservasi Perairan Nasional Kupang">Balai Kawasan Konservasi Perairan Nasional Kupang</option>
                        <option value="Loka Kawasan Konservasi Perairan Nasional Pekanbaru">Loka Kawasan Konservasi Perairan Nasional Pekanbaru</option>
                        <option value="Loka Pengelolaan SD Pesisir & Laut Serang">Loka Pengelolaan SD Pesisir & Laut Serang</option>
                    </select>
                </div>
                <div class="form-group mb-3 hidden-dropdown" id="djptDropdown" style="display: none;">
                    <label for="djptSelect" class="form-label">Satker/UPT Direktorat Jenderal Perikanan Tangkap</label>
                    <select name="satker_upt_3" class="form-select" id="djptSelect" aria-label="Default select example">
                        <option value="">Pilih Satker/UPT Direktorat Jenderal Perikanan Tangkap</option>
                        <!-- ESELON II -->
                        <option value="Sekretariat Direktorat Jenderal Perikanan Tangkap">Sekretariat Direktorat Jenderal Perikanan Tangkap</option>
                        <option value="Direktorat Pengelolaan Sumber Daya Ikan">Direktorat Pengelolaan Sumber Daya Ikan</option>
                        <option value="Direktorat Kapal Perikanan dan Alat Penangkapan Ikan">Direktorat Kapal Perikanan dan Alat Penangkapan Ikan</option>
                        <option value="Direktorat Kepelabuhan Perikanan">Direktorat Kepelabuhan Perikanan</option>
                        <option value="Direktorat Perizinan dan Kenelayanan">Direktorat Perizinan dan Kenelayanan</option>
                        <!-- UPT -->
                        <option value="Balai Besar Penangkapan Ikan">Balai Besar Penangkapan Ikan</option>
                        <option value="Pelabuhan Perikanan Samudera(PPS) Nizam Zachman, Jakarta">Pelabuhan Perikanan Samudera(PPS) Nizam Zachman Jakarta</option>
                        <option value="PPS Kendari">PPS Kendari</option>
                        <option value="PPS Belawan">PPS Belawan</option>
                        <option value="PPS Bungus">PPS Bungus</option>
                        <option value="PPS Cilacap">PPS Cilacap</option>
                        <option value="PPS Bitung">PPS Bitung</option>
                        <option value="Pelabuhan Perikanan Nusantara(PPN) Sibolga">Pelabuhan Perikanan Nusantara(PPN) Sibolga</option>
                        <option value="PPN Tanjunngpandan">PPN Tanjunngpandan</option>
                        <option value="PPN Palabuhanratu">PPN Palabuhanratu</option>
                        <option value="PPN Kejawanan">PPN Kejawanan</option>
                        <option value="PPN Pekalongan">PPN Pekalongan</option>
                        <option value="PPN Brondong">PPN Brondong</option>
                        <option value="PPN Prigi">PPN Prigi</option>
                        <option value="PPN Pemangkat">PPN Pemangkat</option>
                        <option value="PPN Ternate">PPN Ternate</option>
                        <option value="PPN Ambon">PPN Ambon</option>
                        <option value="PPN Tual">PPN Tual</option>
                        <option value="PPN Pengambengan">PPN Pengambengan</option>
                        <option value="PPN Sungailiat">PPN Sungailiat</option>
                        <option value="PPN Karangantu">PPN Karangantu</option>
                        <option value="PPN Kwandang">PPN Kwandang</option>
                        <option value="Pelabuhan Perikanan Pantai(PPP) Teluk Batang">Pelabuhan Perikanan Pantai(PPP) Teluk Batang</option>
                    </select>
                </div>
                <div class="form-group mb-3 hidden-dropdown" id="djpbDropdown" style="display: none;">
                    <label for="djpbSelect" class="form-label">Satker/UPT Direktorat Jenderal Perikanan Budidaya</label>
                    <select name="satker_upt_4" class="form-select" id="djpbSelect" aria-label="Default select example">
                        <option value="">Pilih Satker/UPT Direktorat Jenderal Perikanan Budidaya</option>
                        <!-- ESELON II -->
                        <option value="Sekretariat Direktorat Jenderal Perikanan Budidaya">Sekretariat Direktorat Jenderal Perikanan Budidaya</option>
                        <option value="Direktorat Ikan Air Tawar">Direktorat Ikan Air Tawar</option>
                        <option value="Direktorat Ikan Air Payau">Direktorat Ikan Air Payau</option>
                        <option value="Direktorat Ikan Air Laut">Direktorat Ikan Air Laut</option>
                        <option value="Direktorat Rumput Laut">Direktorat Rumput Laut</option>
                        <!-- UPT -->
                        <option value="Balai Besar Perikanan Budidaya Air Tawar">Balai Besar Perikanan Budidaya Air Tawar</option>
                        <option value="Balai Besar Perikanan Budidaya Air Payau">Balai Besar Perikanan Budidaya Air Payau</option>
                        <option value="Balai Besar Perikanan Budidaya Laut">Balai Besar Perikanan Budidaya Laut</option>
                        <option value="Balai Perikanan Budidaya Air Tawar">Balai Perikanan Budidaya Air Tawar</option>
                        <option value="Balai Perikanan Budidaya Air Payau">Balai Perikanan Budidaya Air Payau</option>
                        <option value="Balai Perikanan Budidaya Laut">Balai Perikanan Budidaya Laut</option>
                        <option value="Balai Produksi Induk Udang Unggul dan Kekerangan Karangasem Bali">Balai Produksi Induk Udang Unggul dan Kekerangan Karangasem Bali</option>
                        <option value="Balai Layanan Usaha Produksi Perikanan Budidaya Karawang, Jawa Barat">Balai Layanan Usaha Produksi Perikanan Budidaya Karawang Jawa Barat</option>
                        <option value="Balai Pengujian Kesehatan Ikan dan Lingkungan Serang, Banten">Balai Pengujian Kesehatan Ikan dan Lingkungan Serang Banten</option>
                    </select>
                </div>
                <div class="form-group mb-3 hidden-dropdown" id="djpdspkpDropdown" style="display: none;">
                    <label for="djpdspkpSelect" class="form-label">Satker/UPT Direktorat Jenderal Penguatan Daya Saing Produk Kelautan dan Perikanan</label>
                    <select name="satker_upt_5" class="form-select" id="djpdspkpSelect" aria-label="Default select example">
                        <option value="">Pilih Satker/UPT Direktorat Jenderal Penguatan Daya Saing Produk Kelautan dan Perikanan</option>
                        <!-- ESELON II -->
                        <option value="Sekretariat Direktorat Jenderal Penguatan Daya Saing Produk Kelautan dan Perikanan">Sekretariat Direktorat Jenderal Penguatan Daya Saing Produk Kelautan dan Perikanan</option>
                        <option value="Direktorat Logistik">Direktorat Logistik</option>
                        <option value="Direktorat Pemberdayaan Usaha">Direktorat Pemberdayaan Usaha</option>
                        <option value="Direktorat Pengolahan">Direktorat Pengolahan</option>
                        <option value="Direktorat Pemasaran">Direktorat Pemasaran</option>
                        <!-- UPT -->
                        <option value="Balai Besar Pengujian Penarapan Produk Kelautan dan Perikanan, Cilangkap">Balai Besar Pengujian Penarapan Produk Kelautan dan Perikanan Cilangkap</option>
                    </select>
                </div>
                <div class="form-group mb-3 hidden-dropdown" id="djpsdkpDropdown" style="display: none;">
                    <label for="djpsdkpSelect" class="form-label">Satker/UPT Direktorat Jenderal Pengawasan Sumber Daya Kelautan dan Perikanan</label>
                    <select name="satker_upt_6" class="form-select" id="djpsdkpSelect" aria-label="Default select example">
                        <option value="">Pilih Satker/UPT Direktorat Jenderal Pengawasan Sumber Daya Kelautan dan Perikanan</option>
                        <!-- ESELON II -->
                        <option value="Sekretariat Direktorat Jenderal Pengawasan Sumber Daya Kelautan dan Perikanan">Sekretariat Direktorat Jenderal Pengawasan Sumber Daya Kelautan dan Perikanan</option>
                        <option value="Direktorat Pengendalian Operasi Armada">Direktorat Pengendalian Operasi Armada</option>
                        <option value="Direktorat Pengawasan Sumber Daya Kelautan">Direktorat Pengawasan Sumber Daya Kelautan</option>
                        <option value="Direktorat Pengawasan Sumber Daya Perikanan">Direktorat Pengawasan Sumber Daya Perikanan</option>
                        <option value="Direktorat Penanganan Pelanggaran">Direktorat Penanganan Pelanggaran</option>   
                        <!-- UPT -->
                        <option value="Pangkalan Pengawasan Sumber Daya Kelautan dan Perikanan(PPSDKP) Lampulo">Pangkalan Pengawasan Sumber Daya Kelautan dan Perikanan(PPSDKP) Lampulo</option>
                        <option value="PPSDKP Batam">PPSDKP Batam</option>
                        <option value="PPSDKP Jakarta">PPSDKP Jakarta</option>
                        <option value="PPSDKP Benoa">PPSDKP Benoa</option>
                        <option value="PPSDKP Bitung">PPSDKP Bitung</option>
                        <option value="PPSDKP Tual">PPSDKP Tual</option>
                        <option value="Stasiun Pengawasan Sumber Daya Kelautan dan Perikanan(SPSDKP) Cilacap">Stasiun Pengawasan Sumber Daya Kelautan dan Perikanan(SPSDKP) Cilacap</option>
                        <option value="SPSDKP Belawan">SPSDKP Belawan</option>
                        <option value="SPSDKP Kupang">SPSDKP Kupang</option>
                        <option value="SPSDKP Pontianak">SPSDKP Pontianak</option>
                        <option value="SPSDKP Tarakan">SPSDKP Tarakan</option>
                        <option value="SPSDKP Tahuna">SPSDKP Tahuna</option>
                        <option value="SPSDKP Ambon">SPSDKP Ambon</option>
                        <option value="SPSDKP Biak">SPSDKP Biak</option>
                    </select>
                </div>
                <div class="form-group mb-3 hidden-dropdown" id="itjenDropdown" style="display: none;">
                    <label for="itjenSelect" class="form-label">Satker Inspektorat Jenderal</label>
                    <select name="satker_upt_7" class="form-select" id="itjenSelect" aria-label="Default select example">
                        <option value="">Pilih Satker Inspektorat Jenderal</option>
                        <!-- ESELON II -->
                        <option value="Sekretariat Inspektorat Jenderal">Sekretariat Inspektorat Jenderal</option>
                        <option value="Inspektorat I">Inspektorat I</option>   
                        <option value="Inspektorat II">Inspektorat II</option>   
                        <option value="Inspektorat III">Inspektorat III</option>   
                        <option value="Inspektorat IV">Inspektorat IV</option>   
                        <option value="Inspektorat V">Inspektorat V</option>   
                    </select>
                </div>
                <div class="form-group mb-3 hidden-dropdown" id="bppsdmkpDropdown" style="display: none;">
                    <label for="bppsdmkpSelect" class="form-label">Satker/UPT Badan Penyuluhan dan Pengembangan Sumber Daya Manusia Kelautan dan Perikanan</label>
                    <select name="satker_upt_8" class="form-select" id="bppsdmkpSelect" aria-label="Default select example">
                        <option value="">Pilih Satker/UPT Badan Penyuluhan dan Pengembangan Sumber Daya Manusia Kelautan dan Perikanan</option>
                        <!-- ESELON II -->
                        <option value="Sekretariat Badan Penyuluhan dan Pengembangan Sumber Daya Manusia Kelautan dan Perikanan">Sekretariat Badan Penyuluhan dan Pengembangan Sumber Daya Manusia Kelautan dan Perikanan</option>
                        <option value="Pusat Penyuluhan Kelautan dan Perikanan">Pusat Penyuluhan Kelautan dan Perikanan</option>   
                        <option value="Pusat Pendidikan Kelautan dan Perikanan">Pusat Pendidikan Kelautan dan Perikanan</option>   
                        <option value="Pusat pelatihan Kelautan dan Perikanan">Pusat pelatihan Kelautan dan Perikanan</option>   
                        <!-- UPT -->
                        <option value="Loka Riset Sumberdaya dan Kerentanan Pesisir, Padang">Loka Riset Sumberdaya dan Kerentanan Pesisir Padang</option>   
                        <option value="Loka Perekayasaan Teknologi Kelautan, Wakatobi">Loka Perekayasaan Teknologi Kelautan Wakatobi</option>   
                        <option value="Pusat Riset Perikanan">Pusat Riset Perikanan</option>   
                        <option value="Balai Riset Perikanan, Jakarta">Balai Riset Perikanan Jakarta</option>   
                        <option value="Balai Riset Perikanan Perairann umum dan Penyuluhan Perikanan, Palembang">Balai Riset Perikanan Perairann umum dan Penyuluhan Perikanan Palembang</option>   
                        <option value="Balai Riset Pemulihan Sumber Daya Ikan, Jatiluhur Purwakarta">Balai Riset Pemulihan Sumber Daya Ikan Jatiluhur Purwakarta</option>   
                        <option value="Balai Riset Perikanan Budidaya Air Payau dan Penyuluhan Perikanan, Maros">Balai Riset Perikanan Budidaya Air Payau dan Penyuluhan Perikanan Maros</option>   
                        <option value="Balai Riset Perikanan Budidaya Air Tawar dan Penyuluhan Perikanan, Bogor">Balai Riset Perikanan Budidaya Air Tawar dan Penyuluhan Perikanan Bogor</option>   
                        <option value="Balai Riset Pemuliaan Ikan, Sukamandi">Balai Riset Pemuliaan Ikan Sukamandi</option>   
                        <option value="Balai Riset Budidaya Ikan Hias, Depok">Balai Riset Budidaya Ikan Hias Depok</option>   
                        <option value="Balai Besar Riset Budidaya Laut dan Penyuluhan Perikanan, Gondol Buleleng Singaraja">Balai Besar Riset Budidaya Laut dan Penyuluhan Perikanan Gondol Buleleng Singaraja</option>   
                        <option value="Loka Riset Perikanan Tuna, Benoa">Loka Riset Perikanan Tuna Benoa</option>   
                        <option value="Loka Riset Mekanisasi Pengolahan Hasil Perikanan">Loka Riset Mekanisasi Pengolahan Hasil Perikanan</option>   
                        <option value="Loka Riset Budidaya Rumput Laut, Boalemo Gorontalo">Loka Riset Budidaya Rumput Laut Boalemo Gorontalo</option>   
                        <option value="Balai Besar Riset Sosial Ekonomi Kelautan dan Perikanan">Balai Besar Riset Sosial Ekonomi Kelautan dan Perikanan</option>   
                        <option value="Balai Besar Riset Pengolahan Produk dan Bioteknologi Kelautan dan Perikanan">Balai Besar Riset Pengolahan Produk dan Bioteknologi Kelautan dan Perikanan</option>   
                        <option value="Pusat Pendidikan Kelautan dan Perikanan">Pusat Pendidikan Kelautan dan Perikanan</option>   
                        <option value="Politeknik KP Bitung">Politeknik KP Bitung</option>   
                        <option value="Politeknik KP Sidoarjo">Politeknik KP Sidoarjo</option>   
                        <option value="Politeknik KP Sorong">Politeknik KP Sorong</option>   
                        <option value="Politeknik KP Karawang">Politeknik KP Karawang</option>   
                        <option value="Politeknik KP Kupang">Politeknik KP Kupang</option>   
                        <option value="Politeknik KP Bone">Politeknik KP Bone</option>   
                        <option value="Akademi Komunitas KP Wakatobi">Akademi Komunitas KP Wakatobi</option>   
                        <option value="Politeknik KP Dumai">Politeknik KP Dumai</option>   
                        <option value="Politeknik KP Pangandaran">Politeknik KP Pangandaran</option>   
                        <option value="Politeknik KP Jembrana">Politeknik KP Jembrana</option>   
                        <option value="Politeknik KP Aceh">Politeknik KP Aceh</option>   
                        <option value="SUPM Pariaman">SUPM Pariaman</option>   
                        <option value="SUPM Kota Agung">SUPM Kota Agung</option>   
                        <option value="SUPM Tegal">SUPM Tegal</option>   
                        <option value="SUPM Waiheru Ambon">SUPM Waiheru Ambon</option>   
                        <option value="Balai Pendidikan dan Pelatihan Aparatur, Sukamandi">Balai Pendidikan dan Pelatihan Aparatur Sukamandi</option>   
                        <option value="BPPP Medan">BPPP Medan</option>   
                        <option value="BPPP Tegal">BPPP Tegal</option>   
                        <option value="BPPP Banyuwangi">BPPP Banyuwangi</option>   
                        <option value="BPPP Bitung">BPPP Bitung</option>   
                        <option value="BPPP Ambon">BPPP Ambon</option>   
                        <option value="Politeknik Ahli Usaha Perikanan">Politeknik Ahli Usaha Perikanan</option>   
                        <option value="Pusat Pelatihan Kelautan dan Perikanan">Pusat Pelatihan Kelautan dan Perikanan</option>   
                        <option value="Pusat Penyuluhan Kelautan dan Perikanan">Pusat Penyuluhan Kelautan dan Perikanan</option>   
                    </select>
                </div>
                <div class="form-group mb-3 hidden-dropdown" id="bppmhkpDropdown" style="display: none;">
                    <label for="bppmhkpSelect" class="form-label">Satker/UPT Badan Pengendalian dan Pengawasan Mutu Hasil Kelautan dan Perikanan</label>
                    <select name="satker_upt_9" class="form-select" id="bppmhkpSelect" aria-label="Default select example">
                        <option value="">Pilih Satker/UPT Badan Pengendalian dan Pengawasan Mutu Hasil Kelautan dan Perikanan</option>
                        <!-- ESELON II -->
                        <option value="Sekretariat Badan Pengendalian dan Pengawasan Mutu Hasil Kelautan dan Perikanan">Sekretariat Badan Pengendalian dan Pengawasan Mutu Hasil Kelautan dan Perikanan</option>
                        <option value="Pusat Manajemen Mutu">Pusat Manajemen Mutu</option>   
                        <option value="Pusat Pengendalian dan Pengawasan Mutu Produksi Primer">Pusat Pengendalian dan Pengawasan Mutu Produksi Primer</option>   
                        <option value="Pusat Pengendalian dan Pengawasan Mutu Pasca Panen">Pusat Pengendalian dan Pengawasan Mutu Pasca Panen</option>   
                        <!-- UPT -->
                        <option value="Balai Besar KIPM Jakarta I">Loka Riset Sumberdaya dan Kerentanan Pesisir Padang</option>      
                        <option value="Balai Besar KIPM Makasar">Balai Besar KIPM Makasar</option>      
                        <option value="Balai Besar KIPM Denpasar">Balai Besar KIPM Denpasar</option>      
                        <option value="Balai Besar KIPM Surabaya I">Balai Besar KIPM Surabaya I</option>      
                        <option value="Balai Besar KIPM Medan I">Balai Besar KIPM Medan I</option>      
                        <option value="Balai Besar KIPM Balikpapan">Balai Besar KIPM Balikpapan</option>      
                        <option value="Balai Besar KIPM Jayapura">Balai Besar KIPM Jayapura</option>      
                        <option value="Balai Besar KIPM Jakarta II">Balai Besar KIPM Jakarta II</option>      
                        <option value="Balai Besar KIPM Surabaya II">Balai Besar KIPM Surabaya II</option>      
                        <option value="Balai Besar KIPM Mataram">Balai Besar KIPM Mataram</option>      
                        <option value="Balai Besar KIPM Manado">Balai Besar KIPM Manado</option>      
                        <option value="Balai Besar KIPM Semarang">Balai Besar KIPM Semarang</option>      
                        <option value="Balai Besar KIPM Banjarmasin">Balai Besar KIPM Banjarmasin</option>      
                        <option value="Balai Besar KIPM Lampung">Balai Besar KIPM Lampung</option>      
                        <option value="Balai Besar KIPM Ambon">Balai Besar KIPM Ambon</option>      
                        <option value="Balai Besar KIPM Entikong">Balai Besar KIPM Entikong</option>      
                        <option value="Balai Besar KIPM Tanjung Pinang">Balai Besar KIPM Tanjung Pinang</option>      
                        <option value="Balai Besar KIPM Tarakan">Balai Besar KIPM Tarakan</option>      
                        <option value="Stasiun Besar KIPM Palembang">Stasiun Besar KIPM Palembang</option>      
                        <option value="Stasiun Besar KIPM Bandung">Stasiun Besar KIPM Bandung</option>      
                        <option value="Stasiun Besar KIPM Merauke">Stasiun Besar KIPM Merauke</option>      
                        <option value="Stasiun Besar KIPM Pontianak">Stasiun Besar KIPM Pontianak</option>      
                        <option value="Stasiun Besar KIPM Kendari">Stasiun Besar KIPM Kendari</option>      
                        <option value="Stasiun Besar KIPM Batam">Stasiun Besar KIPM Batam</option>      
                        <option value="Stasiun Besar KIPM Padang">Stasiun Besar KIPM Padang</option>      
                        <option value="Stasiun Besar KIPM Jambi">Stasiun Besar KIPM Jambi</option>      
                        <option value="Stasiun Besar KIPM Palu">Stasiun Besar KIPM Palu</option>      
                        <option value="Stasiun Besar KIPM Palangkaraya">Stasiun Besar KIPM Palangkaraya</option>      
                        <option value="Stasiun Besar KIPM Kupang">Stasiun Besar KIPM Kupang</option>      
                        <option value="Stasiun Besar KIPM Pangkal Pinang">Stasiun Besar KIPM Pangkal Pinang</option>      
                        <option value="Stasiun Besar KIPM Ternate">Stasiun Besar KIPM Ternate</option>      
                        <option value="Stasiun Besar KIPM Yogyakarta">Stasiun Besar KIPM Yogyakarta</option>      
                        <option value="Stasiun Besar KIPM Aceh">Stasiun Besar KIPM Aceh</option>      
                        <option value="Stasiun Besar KIPM Gorontalo">Stasiun Besar KIPM Gorontalo</option>      
                        <option value="Stasiun Besar KIPM Pekanbaru">Stasiun Besar KIPM Pekanbaru</option>      
                        <option value="Stasiun Besar KIPM Medan II">Stasiun Besar KIPM Medan II</option>      
                        <option value="Stasiun Besar KIPM Sorong">Stasiun Besar KIPM Sorong</option>      
                        <option value="Stasiun Besar KIPM Bengkulu">Stasiun Besar KIPM Bengkulu</option>      
                        <option value="Stasiun Besar KIPM Cirebon">Stasiun Besar KIPM Cirebon</option>      
                        <option value="Stasiun Besar KIPM Luwuk Banggai">Stasiun Besar KIPM Luwuk Banggai</option>      
                        <option value="Stasiun Besar KIPM Tanjung Balai Asahan">Stasiun Besar KIPM Tanjung Balai Asahan</option>      
                        <option value="Stasiun Besar KIPM Bima">Stasiun Besar KIPM Bima</option>      
                        <option value="Stasiun Besar KIPM Tahuna">Stasiun Besar KIPM Tahuna</option>      
                        <option value="Stasiun Besar KIPM Bau-Bau">Stasiun Besar KIPM Bau-Bau</option>      
                        <option value="Stasiun Besar KIPM Merak">Stasiun Besar KIPM Merak</option>      
                        <option value="Stasiun Besar KIPM Mamuju">Stasiun Besar KIPM Mamuju</option>      
                        <option value="Balai Uji Standar KIPM">Balai Uji Standar KIPM</option>      
                    </select>
                </div>
                <!-- jenis mitra -->
                <div class="form-group mb-3">
                    <label for="jenis_mitra" class="form-label">Jenis Mitra</label>
                    <select class="form-select" id="jenis_mitra" name="jenis_mitra" aria-label="Default select example" required>
                        <option value="">Pilih Jenis Mitra</option>
                        <option value="Kementrian/Lembaga">Kementrian/Lembaga</option>
                        <option value="Universitas/Perguruan Tinggi">Universitas/Perguruan Tinggi</option>
                        <option value="Ormas/LSM">Ormas/LSM</option>
                    </select>
                </div>
                <!-- nama mitra -->
                <div class="form-group mb-3">
                    <label for="nama_mitra" class="form-label">Nama Mitra</label>
                    <select class="form-select" id="nama_mitra" name="nama_mitra" aria-label="Default select example" required>
                        <option value="">Pilih Nama Mitra</option>
                    </select>
                </div>
                <!-- bentuk kerjasama -->
                <div class="form-group mb-3">
                    <label for="bentuk_kerjasama" class="form-label">Bentuk Kerjasama</label>
                    <select class="form-select" id="bentuk_kerjasama" name="bentuk_kerjasama" aria-label="Default select example" required>
                        <option value="">Pilih Bentuk Kerjasama</option>
                        <option value="Kesepakatan Bersama">Kesepakatan Bersama</option>
                        <option value="Nota Kesepahaman">Nota Kesepahaman</option>
                        <option value="Nota Kesepakatan">Nota Kesepakatan</option>
                        <option value="Memorandum Saling Pengertian">Memorandum Saling Pengertian</option>
                        <option value="Perjanjian Kerjasama">Perjanjian Kerjasama</option>
                        <option value="Lain-lain">Lain-lain</option>
                    </select>
                </div>
                <!-- hidden input bentuk kerjasama lain -->
                <div class="form-group mb-3" id="inputLainLain" style="display: none;">
                    <label for="kerjasama_lain" class="form-label">Bentuk Kerja Sama Lain</label>
                    <input type="text" class="form-control" id="kerjasama_lain" name="kerjasama_lain" placeholder="Sebutkan Bentuk Kerja Sama">
                </div>
                <!-- bentuk dukungan -->
                <div class="form-group mb-3">
                    <label for="bentuk_dukungan" class="form-label">Bentuk Dukungan Program KKP</label>
                    <select class="form-select" id="bentuk_dukungan" name="bentuk_dukungan" aria-label="Default select example" required>
                        <option value="">Pilih Bentuk Dukungan</option>
                        <option>--5 Kebijakan Ekonomi Biru--</option>
                        <option value="Perluasan Kawasan Konservasi Laut">Perluasan Kawasan Konservasi Laut</option>
                        <option value="Penangkapan Ikan Terukur Berbasis Kuota">Penangkapan Ikan Terukur Berbasis Kuota</option>
                        <option value="Pengembangan Budidaya Laut, Pesisir dan Darat Secara Berkelanjutan">Pengembangan Budidaya Laut, Pesisir dan Darat Secara Berkelanjutan</option>
                        <option value="Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil">Pengawasan dan Pengendalian Pesisir dan Pulau-Pulau Kecil</option>
                        <option value="Pengelolaan Sampah Plastik di Laut">Pengelolaan Sampah Plastik di Laut</option>
                        <option>--Lain-lain--</option>
                        <option value="Dukungan Manajemen">Dukungan Manajemen</option>
                    </select>
                </div>
                <!-- uraian -->
                <div class="form-group mb-3">
                    <label for="uraian" class="form-label">Uraian</label>
                    <textarea type="text" class="form-control" id="uraian" name="uraian" placeholder="Masukan uraian bila perlu" rows="3"></textarea>
                </div>
                <!-- hidden input file -->
                <div class="form-horizontal" id="suratPermohonanInput" style="display: none;">
                    <div class="row mb-3" id="suratPermohonanInput">
                        <label for="surat_permohonan" class="col-sm-3 col-form-label">Surat Permohonan Kerja Sama</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="surat_permohonan" name="surat_permohonan">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal" id="profilMitraInput" style="display: none;">
                    <div class="row mb-3" id="profilMitraInput">
                        <label for="profil_mitra" class="col-sm-3 col-form-label">Profil Mitra</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="profil_mitra" name="profil_mitra">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal" id="draftKerjasamaInput" style="display: none;">
                    <div class="row mb-3" id="draftKerjasamaInput">
                        <label for="draft_kerjasama" class="col-sm-3 col-form-label">Draft Kerja Sama</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="draft_kerjasama" name="draft_kerjasama">
                        </div>
                    </div>
                </div>
                <div class="form-horizontal" id="ormasInput" style="display: none;">
                    <div class="row mb-3" id="skKumhamInput">
                        <label for="sk_kumham" class="col-sm-3 col-form-label">SK KumHam</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="sk_kumham" name="sk_kumham">
                        </div>
                    </div>
                    <div class="row mb-3" id="suratKomitmenInput">
                        <label for="surat_komitmen" class="col-sm-3 col-form-label">Surat Komitmen Kesediaan Anggaran</label>
                        <div class="col-sm-5">
                            <input type="file" class="form-control" id="surat_komitmen" name="surat_komitmen">
                        </div>
                    </div>
                </div>
                
                <div>
                    <button type="submit" class="btn btn-success mb-3" >Simpan</button>
                    <button type="button" class="btn btn-danger mb-3" onclick="window.location.href='<?= base_url('/home') ?>';">Kembali</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('unit_organisasi').addEventListener('change', function() {
        document.querySelectorAll('.hidden-dropdown').forEach(function(dropdown) {
            dropdown.style.display = 'none';
        });

        const selectedValue = this.value;
        if (selectedValue === 'Sekretariat Jendral') {
            document.getElementById('setjenDropdown').style.display = 'block';
        } else if (selectedValue === 'Direktorat Jenderal Pengelolaan Kelautan dan Ruang Laut') {
            document.getElementById('djprlDropdown').style.display = 'block';
        } else if (selectedValue === 'Direktorat Jenderal Perikanan Tangkap') {
            document.getElementById('djptDropdown').style.display = 'block';
        } else if (selectedValue === 'Direktorat Jenderal Perikanan Budidaya') {
            document.getElementById('djpbDropdown').style.display = 'block';
        } else if (selectedValue === 'Direktorat Jenderal Penguatan Daya Saing Produk Kelautan dan Perikanan') {
            document.getElementById('djpdspkpDropdown').style.display = 'block';
        } else if (selectedValue === 'Direktorat Jenderal Pengawasan Sumber Daya Kelautan dan Perikanan') {
            document.getElementById('djpsdkpDropdown').style.display = 'block';
        } else if (selectedValue === 'Inspektorat Jenderal') {
            document.getElementById('itjenDropdown').style.display = 'block';
        } else if (selectedValue === 'Badan Penyuluhan dan Pengembangan Sumber Daya Manusia Kelautan dan Perikanan') {
            document.getElementById('bppsdmkpDropdown').style.display = 'block';
        } else if (selectedValue === 'Badan Pengendalian dan Pengawasan Mutu Hasil Kelautan dan Perikanan') {
            document.getElementById('bppmhkpDropdown').style.display = 'block';
        }
    });
    
    document.getElementById('jenis_mitra').addEventListener('change', function() {
        var selectedValue = this.value;
        var namaMitraSelect = document.getElementById('nama_mitra');
        namaMitraSelect.innerHTML = '<option>Pilih Nama Mitra</option>';
        
        <?php foreach ($statusvm as $vm) : ?>
            if (selectedValue === '<?= $vm['jenis_mitra']; ?>') {
                var option = document.createElement('option');
                option.value = '<?= $vm['nama_mitra']; ?>';
                option.text = '<?= $vm['nama_mitra']; ?>';
                namaMitraSelect.appendChild(option);
            }
        <?php endforeach; ?>
    });
    
    document.getElementById('bentuk_kerjasama').addEventListener('change', function() {
        var selectedValue = this.value;
        var inputLainLain = document.getElementById('inputLainLain');
        
        if (selectedValue === 'Lain-lain') {
            inputLainLain.style.display = 'block';
        } else {
            inputLainLain.style.display = 'none';
        }
    });

    document.getElementById('jenis_mitra').addEventListener('change', function() {
    document.getElementById('suratPermohonanInput').style.display = 'none';
    document.getElementById('profilMitraInput').style.display = 'none';
    document.getElementById('draftKerjasamaInput').style.display = 'none';
    document.getElementById('ormasInput').style.display = 'none';
    
    if (this.value === 'Kementrian/Lembaga' || this.value === 'Universitas/Perguruan Tinggi' || this.value === 'Ormas/LSM') {
        document.getElementById('suratPermohonanInput').style.display = 'block';
        document.getElementById('draftKerjasamaInput').style.display = 'block';

        if (this.value === 'Kementrian/Lembaga') {
        } else if (this.value === 'Universitas/Perguruan Tinggi') {
            document.getElementById('profilMitraInput').style.display = 'block';
        } else if (this.value === 'Ormas/LSM') {
            document.getElementById('profilMitraInput').style.display = 'block';
            document.getElementById('ormasInput').style.display = 'block';
        }
    }
    });

</script>
<?= $this->endsection(''); ?>