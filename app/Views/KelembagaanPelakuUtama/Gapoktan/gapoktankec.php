<?= $this->extend('layout/main_template') ?>

<?= $this->section('content') ?>
<?php $sessnama = session()->get('kodebpp'); ?>

<center><h2> Daftar Gabungan Kelompok Tani Binaan BP3K <?= ucwords(strtolower($nama_bpp)) ?> </h2></center>
<div class="card">
    <div class="table-responsive">
        <table class="table align-items-center mb-0">
            <thead>
                <tr>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">No</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Nama Kecamatan</th>
                   
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder" style="text-align: center;">Jumlah<br>Gapoktan</th>
                   
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
                        <p class="text-xs font-weight-bold mb-0"><?= $row['deskripsi'] ?></p>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $row['jum'] ?></p>
                  
                        <td class="align-middle text-center text-sm">
                        <a href="/listgapoktan"><button type="button" class="btn btn-info btn-sm">
                             Detail
                        </button></a>
                        </a>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <th class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"></p>
                    </th>
                    <th class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0">JUMLAH</p>
                    </th>
                    <th class="align-middle text-center text-sm">
                        <p class="text-xs font-weight-bold mb-0"><?= $jumgap ?></p>
                    </th>
                

                    <th class="align-middle text-center text-sm">
                        <a href=""> <button type="button" class="btn btn-info btn-sm">
                             Detail
                        </button></a>
                        </a>
                    </th>
                </tr>
            </tfoot>
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