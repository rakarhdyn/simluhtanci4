<?php

namespace App\Controllers\KelembagaanPelakuUtama\Gapoktan;
use App\Controllers\BaseController;
use App\Models\KelembagaanPelakuUtama\Gapoktan\GapoktanKecModel;

class GapoktanKec extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function gapoktankec()
    {
    
        $gapoktankec_model = new GapoktanKecModel;
        $gapoktankec_data = $gapoktankec_model->getGapoktanKecTotal($this->session->get('kodebpp'));

        $data = [
            
            'nama_bpp' => $gapoktankec_data['nama_bpp'],
            'jum' => $gapoktankec_data['jum'],
            
            'jumgap' => $gapoktankec_data['jumgap'],
            'tabel_data' => $gapoktankec_data['table_data'],
            'title' => 'Gapoktan',
            'name' => 'Gapoktan'
        ];

        return view('KelembagaanPelakuUtama/Gapoktan/gapoktankec', $data);
    }
 

 
}