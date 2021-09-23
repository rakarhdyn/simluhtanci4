<?php

namespace App\Controllers\KelembagaanPelakuUtama\KelembagaanPetaniLainnya;
use App\Controllers\BaseController;
use App\Models\KelembagaanPelakuUtama\KelembagaanPetaniLainnya\KelembagaanPetaniLainnyaKecModel;

class KelembagaanPetaniLainnyaKec extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function kelembagaanpetanilainnyakec()
    {
        
        $kelembagaanpetanilainnyakec_model = new KelembagaanPetaniLainnyaKecModel();
        $kelembagaanpetanilainnyakec_data = $kelembagaanpetanilainnyakec_model->getKelembagaanPetaniLainnyaKecTotal($this->session->get('kodebpp'));

        $data = [
            
            'nama_bpp' => $kelembagaanpetanilainnyakec_data['nama_bpp'],
            'jum' => $kelembagaanpetanilainnyakec_data['jum'],
            'jumkp2l' => $kelembagaanpetanilainnyakec_data['jumkp2l'],
            'tabel_data' => $kelembagaanpetanilainnyakec_data['table_data'],
            'title' => 'Kelompok Petani Lainnya',
            'name' => 'Kelompok Petani Lainnya'
        ];

        return view('KelembagaanPelakuUtama/KelembagaanPetaniLainnya/kelembagaanpetanilainnyakec', $data);
    }
  
   
}