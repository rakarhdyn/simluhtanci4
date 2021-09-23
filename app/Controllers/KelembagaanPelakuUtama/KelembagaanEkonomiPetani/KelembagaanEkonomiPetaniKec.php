<?php

namespace App\Controllers\KelembagaanPelakuUtama\KelembagaanEkonomiPetani;
use App\Controllers\BaseController;
use App\Models\KelembagaanPelakuUtama\KelembagaanEkonomiPetani\KelembagaanEkonomiPetaniKecModel;

class KelembagaanEkonomiPetaniKec extends BaseController
{
    protected $session;

    function __construct()
    {
        $this->session = \Config\Services::session();
        $this->session->start();
    }
    public function kelembagaanekonomipetanikec()
    {
       
        $kelembagaanekonomipetanikec_model = new KelembagaanEkonomiPetaniKecModel();
        $kelembagaanekonomipetanikec_data = $kelembagaanekonomipetanikec_model->getKelembagaanEkonomiPetaniKecTotal($this->session->get('kodebpp'));

        $data = [
            
            'nama_bpp' => $kelembagaanekonomipetanikec_data['nama_bpp'],
            'tabel_data' => $kelembagaanekonomipetanikec_data['table_data'],
            'jum' => $kelembagaanekonomipetanikec_data['jum'],
            'jumkep' => $kelembagaanekonomipetanikec_data['jumkep'],
            'title' => 'Kelembagaan Ekonomi Petani',
            'name' => 'Kelembagaan Ekonomi Petani'
        ];

        return view('KelembagaanPelakuUtama/KelembagaanEkonomiPetani/kelembagaanekonomipetanikec', $data);
    }
  
   
}