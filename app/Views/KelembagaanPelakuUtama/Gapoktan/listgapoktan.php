<?= $this->extend('layout/main_template') ?>

<?= $this->section('content') ?>
<?php $sessnama = session()->get('kodebpp'); ?>
<center><h2> Daftar Gapoktan di Kecamatan <?= ucwords(strtolower($nama_kecamatan)) ?> </h2></center>
<center><h2>Data ditemukan <?= ucwords(strtolower($jum)) ?> </h2></center>
<button type="button" data-bs-toggle="modal" data-bs-target="#modal-form" class="btn bg-gradient-primary btn-sm">+ Tambah Data</button>
<div class="card">
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Nama Desa</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Nama Gapoktan</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Nama Ketua</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Nama Bendahara</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Alamat Sekretariat</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Anggota Poktan</th>
                    <th class="text-secondary opacity-7"></th>
                </tr>
            </thead>
            <tbody>
            <?php
            $i = 1;
            foreach ($tabel_data as $row) {
            ?>
            
                <tr>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $i++ ?></p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row['nm_desa'] ?></p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row['nama_gapoktan'] ?></p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row['ketua_gapoktan'] ?></p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row['simluh_bendahara'] ?></p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row['alamat'] ?></p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row['jumpok'] ?></p>
                    </td>
                    
                    <td class="align-middle text-center text-sm">
                            <a href="#">
                                <button type="button" data-bs-toggle="modal" data-bs-target="#modal-form" class="btn bg-gradient-warning btn-sm">
                                    <i class="fas fa-edit"></i> Ubah
                                </button>
                            </a>
                            <button type="button" class="btn bg-gradient-danger btn-sm">
                                <i class="fas fa-trash"></i> Hapus
                            </button>
                            </a>
                        </td>
                </tr>
            <?php
            }
            ?>
<divv class="modal fade" id="modal-form" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <div class="modal-content">
                    <div class="modal-body p-0">
                        <div class="card card-plain">
                            <div class="card-header pb-0 text-left">
                                <h4 class="font-weight-bolder text-warning text-gradient">Tambah Data</h4>
                            </div>
                            <div class="card-body">
                                <form role="form text-left">
                                    <div class="row">
                                        <div class="col">
                                            <label>Kecamatan</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Teupah Selatan" aria-label="Email" aria-describedby="email-addon" disabled>
                                            </div>
                                            <label>Desa</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Desa</option>
                                                    <option value="Latiung">Latiung</option>
                                                    <option value="Labuan Bajau">Labuan Bajau</option>
                                                </select>
                                            </div>
                                            <label>Nama Gapoktan/label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama GapoktanP" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <label>Nama Ketua</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Ketua" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <label>Nama Bendahara</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Bendahara" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <label>Nama Sekretaris</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Nama Sekretaris" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <label>Alamat Sekretariat</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Alamat Sekretariat" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <label>Tahun Pembentukan</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Tahun</option>
                                                    <option value="2020">2020</option>
                                                    <option value="2021">2021</option>
                                                </select>
                                            </div>
                                            <label>SK Pengukuhan</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih SK</option>
                                                    <option value="Ada">Ada</option>
                                                    <option value="Tidak Ada">Tidak Ada</option>
                                                </select>
                                            </div>
                                              <label>Tempat, Tanggal Lahir</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Tempat" aria-label="Password" aria-describedby="password-addon">
                                                <input type="date" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <label>Jenis Kelamin</label>
                                            <div class="input-group mb-3">
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                    <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                                </div>
                                            </div>
                                            <label>Agama</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Agama</option>
                                                    <option value="Islam">Islam</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Khatolik">Khatolik</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Budha">Budha</option>
                                                    <option value="Lainnya">Lainnya</option>
                                                </select>
                                            </div>
                                            <label>Tingkat Pendidikan</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Tingkat Pendidikan</option>
                                                    <option value="S3 (Setara)">S3 (Setara)</option>
                                                    <option value="S2 (Setara)">S2 (Setara)</option>
                                                    <option value="S1 (Setara)">S1 (Setara)</option>
                                                    <option value="D4">D4</option>
                                                    <option value="SM">SM</option>
                                                    <option value="D3">D3</option>
                                                    <option value="D2">D2</option>
                                                    <option value="D1">D1</option>
                                                    <option value="SLTA">SLTA</option>
                                                    <option value="SLTP">SLTP</option>
                                                    <option value="D3">D3</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label>No. SK Penetapan</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="No. SK Penetapan" aria-label="Password" aria-describedby="password-addon">
                                            </div>

                                            <label>Pejabat Yang Menetapkan</label>
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" placeholder="Pejabat Yang Menetapkan" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <label>Keahlian Bidang Teknis</label>
                                            <div class="input-group mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Tanaman Pangan" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Tanaman Pangan
                                                    </label>
                                                </div> &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" class="form-control" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Tanaman Pangan" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Peternakan
                                                    </label>
                                                </div> &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" class="form-control" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Tanaman Pangan" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Perkebunan
                                                    </label>
                                                </div> &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" class="form-control" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Tanaman Pangan" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Hortikultura
                                                    </label>
                                                </div> &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" class="form-control" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <div class="input-group mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="Tanaman Pangan" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Lainnya
                                                    </label>
                                                </div> &nbsp; &nbsp; &nbsp; &nbsp; <input type="text" class="form-control" aria-label="Password" aria-describedby="password-addon">
                                            </div>
                                            <label>Unit Kerja (BPP Kecamatan)</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Unit Kerja</option>
                                                    <option value="Bpp Arjosari">Bpp Arjosari</option>
                                                    <option value="Bpp Bandar">Bpp Bandar</option>
                                                    <option value="Bpp Donorojo">Bpp Donorojo</option>
                                                    <option value="Bpp Kebonagung">Bpp Kebonagung</option>
                                                    <option value="Bpp Nawangan">Bpp Nawangan</option>
                                                    <option value="Bpp Ngadirojo">Bpp Ngadirojo</option>
                                                    <option value="Bpp Pacitan">Bpp Pacitan</option>
                                                    <option value="Bpp Pringkuku">Bpp Pringkuku</option>
                                                    <option value="Bpp Sudimoro">Bpp Sudimoro</option>
                                                    <option value="Bpp Tulakan">Bpp Tulakan</option>
                                                    <option value="Bpp Kec. Tegalombo">Bpp Kec. Tegalombo</option>
                                                    <option value="Bpp Punung">Bpp Punung</option>
                                                </select>
                                            </div>
                                            <label>Tempat Tugas</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Kecamatan</option>
                                                    <option value="Kec. Arjosari">Kec. Arjosari</option>
                                                    <option value="Kec. Bandar">Kec. Bandar</option>
                                                    <option value="Kec. Donorojo">Kec. Donorojo</option>
                                                    <option value="Kec. Kebonagung">Kec. Kebonagung</option>
                                                    <option value="Kec. Nawangan">Kec. Nawangan</option>
                                                    <option value="Kec. Ngadirojo">Kec. Ngadirojo</option>
                                                    <option value="Kec. Pacitan">Kec. Pacitan</option>
                                                    <option value="Kec. Pringkuku">Kec. Pringkuku</option>
                                                    <option value="Kec. Sudimoro">Kec. Sudimoro</option>
                                                    <option value="Kec. Tulakan">Kec. Tulakan</option>
                                                    <option value="Kec. Tegalombo">Kec. Tegalombo</option>
                                                    <option value="Kec. Punung">Kec. Punung</option>
                                                </select>
                                            </div>
                                            <label>Wilayah Kerja 1</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Desa</option>x
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col">
                                            <label>Wilayah Kerja 2</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Desa</option>
                                                </select>
                                            </div>
                                            <label>Wilayah Kerja 3</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Desa</option>
                                                </select>
                                            </div>
                                            <label>Wilayah Kerja 4</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Desa</option>
                                                </select>
                                            </div>
                                            <label>Wilayah Kerja 5</label>
                                            <div class="input-group mb-3">
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Pilih Desa</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label>Alamat Rumah</label>
                                                <div class="input-group mb-3">
                                                    <textarea class="form-control" placeholder="Alamat Rumah" id="floatingTextarea"></textarea>
                                                </div>
                                                <label>Kab./Kota dan Kode Pos</label>
                                                <div class="input-group mb-3">
                                                    <input type="text" class="form-control" placeholder="Kab./Kota" aria-label="Password" aria-describedby="password-addon">

                                                    <input type="text" class="form-control" placeholder="| Kode Pos" aria-label="Password" aria-describedby="password-addon">
                                                </div>
                                                <label>Provinsi</label>
                                                <div class="input-group mb-3">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Pilih Provinsi</option>
                                                        <option value="Aceh">Aceh</option>
                                                        <option value="BALI">BALI</option>
                                                        <option value="BANTEN">BANTEN</option>
                                                        <option value="BENKULU">BENKULU</option>
                                                        <option value="DI YOGYAKARTA">DI YOGYAKARTA</option>
                                                        <option value="DKI JAKARTA">DKI JAKARTA</option>
                                                        <option value="GORONTALO">GORONTALO</option>
                                                        <option value="JAMBI">Kec. Pringkuku</option>
                                                        <option value="JAWA BARAT">JAWA BARAT</option>
                                                        <option value="JAWA TENGAH">JAWA TENGAH</option>
                                                        <option value="JAWA TIMUR">JAWA TIMUR</option>
                                                        <option value="KALIMANTAN BARAT">KALIMANTAN BARAT</option>
                                                        <option value="KALIMANTAN SELATAN">KALIMANTAN SELATAN</option>
                                                        <option value="KALIMANTAN TENGAH">KALIMANTAN TENGAH</option>
                                                        <option value="KALIMANTAN TIMUR">KALIMANTAN TIMUR</option>
                                                        <option value="KALIMANTAN UTARA">KALIMANTAN UTARA</option>
                                                        <option value="KEPULAUAN BANGKA BELITUNG">KEPULAUAN BANGKA BELITUNG</option>
                                                        <option value="KEPULAUAN RIAU">KEPULAUAN RIAU</option>
                                                        <option value="MALUKU">MALUKU</option>
                                                        <option value="MALUKU UTARA">MALUKU UTARA</option>
                                                        <option value="NUSA TENGGARA BARAT">NUSA TENGGARA BARAT</option>
                                                        <option value="NUSA TENGGARA TIMUR">NUSA TENGGARA TIMUR</option>
                                                        <option value="PAPUA">PAPUA</option>
                                                        <option value="PAPUA BARAT">PAPUA BARAT</option>
                                                        <option value="RIAU">RIAU</option>
                                                        <option value="SULAWESI BARAT">SULAWESI BARAT</option>
                                                        <option value="SULAWESI SELATAN">SULAWESI SELATAN</option>
                                                        <option value="SULAWESI TENGAH">SULAWESI TENGAH</option>
                                                        <option value="SULAWESI TENGGARA">SULAWESI TENGGARA</option>
                                                        <option value="SULAWESI UTARA">SULAWESI UTARA</option>
                                                        <option value="SUMATERA BARAT">SUMATERA BARAT</option>
                                                        <option value="SUMATERA SELATAN">SUMATERA SELATAN</option>
                                                        <option value="SUMATERA UTARA">SUMATERA UTARA</option>
                                                    </select>
                                                </div>
                                                <label>No.Telepon/HP</label>
                                                <div class="input-group mb-3">
                                                    <input type="number" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                                </div>
                                                <label>Email</label>
                                                <div class="input-group mb-3">
                                                    <input type="email" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon">
                                                </div>
                                            </div>

                                            <div class="text-center">
                                                <center><button type="button" class="btn btn-round bg-gradient-warning btn-lg w-100 mt-4 mb-0">Simpan Data</button></center>
                                            </div>
                                        </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
            </tbody>
     
        </table>
               
    </div>
</div>
</tbody>
</table>
</div>

</div>
<?php echo view('layout/footer'); ?>
<br>

<?= $this->endSection() ?>