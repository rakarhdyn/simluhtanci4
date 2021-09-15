<?php

namespace App\Controllers\KelembagaanPelakuUtama\Gapoktan;
use App\Controllers\BaseController;
use App\Models\KelembagaanPelakuUtama\Gapoktan\ListGapoktanModel;

class ListGapoktan extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function listgapoktan()
    {

        
        $listgapoktan_model = new ListGapoktanModel();
        $listgapoktan_data = $listgapoktan_model->getListGapoktanTotal($this->session->get('kodebpp'));

        $data = [
            
            'nama_kecamatan' => $listgapoktan_data['nama_kec'],
            'jum' => $listgapoktan_data['jum'],
          //  'jumpok' => $listgapoktan_data['jumpok'],
            'tabel_data' => $listgapoktan_data['table_data'],
            'title' => 'List Gabungan Kelompok Tani',
            'name' => 'List Gabungan Kelompok Tani'
        ];

        return view('KelembagaanPelakuUtama/Gapoktan/listgapoktan', $data);
    }
  
}