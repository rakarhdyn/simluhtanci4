<?php

namespace App\Controllers\KelembagaanPelakuUtama\kelompoktani;
use App\Controllers\BaseController;
use App\Models\KelembagaanPelakuUtama\KelompokTani\KelompokTaniModel;

class KelompokTani extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function kelompoktani()
    {
        
        $kelompoktani_model = new KelompokTaniModel();
        $kelompoktani_data = $kelompoktani_model->getKelompokTaniTotal($this->session->get('kodebapel'));

        $data = [
            
            'nama_kabupaten' => $kelompoktani_data['nama_kab'],
            'jum_poktan' => $kelompoktani_data['jum_poktan'],
            'tabel_data' => $kelompoktani_data['table_data'],
            'title' => 'Kelompok Tani',
            'name' => 'Kelompok Tani'
        ];

        return view('KelembagaanPelakuUtama/KelompokTani/kelompoktani', $data);
    }
  
    public function listkelompoktani()
    {
        $data = [
            'title' => 'Gapoktan'
        ];

        return view('KelembagaanPelakuUtama/listkelompoktani', $data);
    }
}