<?php

namespace App\Controllers\KelembagaanPelakuUtama\KelompokTani;
use App\Controllers\BaseController;
use App\Models\KelembagaanPelakuUtama\KelompokTani\KelompokTaniKecModel;

class KelompokTaniKec extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function kelompoktanikec()
    {
       
        $kelompoktanikec_model = new KelompokTaniKecModel();
        $kelompoktanikec_data = $kelompoktanikec_model->getKelompokTaniKecTotal($this->session->get('kodebpp'));

        $data = [
            
            'jum' => $kelompoktanikec_data['jum'],
            'jumpok' => $kelompoktanikec_data['jumpok'],
            'nama_bpp' => $kelompoktanikec_data['nama_bpp'],
            'tabel_data' => $kelompoktanikec_data['table_data'],
            'title' => 'Kelompok Tani',
            'name' => 'Kelompok Tani'
        ];

        return view('KelembagaanPelakuUtama/KelompokTani/kelompoktanikec', $data);
    }
  
    
}