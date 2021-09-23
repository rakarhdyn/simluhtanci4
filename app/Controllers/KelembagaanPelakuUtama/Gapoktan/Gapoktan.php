<?php

namespace App\Controllers\KelembagaanPelakuUtama\Gapoktan;
use App\Controllers\BaseController;
use App\Models\KelembagaanPelakuUtama\Gapoktan\GapoktanModel;

use App\Models\KelembagaanPelakuUtama\Gapoktan\ListGapoktanModel;

class Gapoktan extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function gapoktan()
    {
    
        $gapoktan_model = new GapoktanModel;
        $gapoktan_data = $gapoktan_model->getGapoktanTotal($this->session->get('kodebapel'));

        $data = [
            
            'nama_kabupaten' => $gapoktan_data['nama_kab'],
            'jum_gapoktan' => $gapoktan_data['jum_gapoktan'],
            'tabel_data' => $gapoktan_data['table_data'],
            'title' => 'Gapoktan',
            'name' => 'Gapoktan'
        ];

        return view('KelembagaanPelakuUtama/Gapoktan/gapoktan', $data);
    }
 

 
}