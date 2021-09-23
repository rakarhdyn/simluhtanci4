<?php

namespace App\Controllers\KelembagaanPelakuUtama\kelompoktani;
use App\Controllers\BaseController;
use App\Models\KelembagaanPelakuUtama\KelompokTani\ListPoktanModel;

class ListPoktan extends BaseController
{
    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function listpoktan()
    {
       
        $listpoktan_model = new ListPoktanModel();
        $listpoktan_data = $listpoktan_model->getListKelompokTaniTotal($this->session->get('kodebpp'));

        $data = [
            
            'nama_kecamatan' => $listpoktan_data['nama_kec'],
            'jum' => $listpoktan_data['jum'],
           // 'jumangg' => $listpoktan_data['jumangg'],
           // 'jup' => $listpoktan_data['jup'],
            'tabel_data' => $listpoktan_data['table_data'],
            'title' => 'List Kelompok Tani',
            'name' => 'List Kelompok Tani'
        ];

        return view('KelembagaanPelakuUtama/KelompokTani/listpoktan', $data);
    }
  
}