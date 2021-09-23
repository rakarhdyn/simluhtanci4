<?php

namespace App\Models\KelembagaanPelakuUtama\KelembagaanEkonomiPetani;

use CodeIgniter\Model;
use \Config\Database;

class KelembagaanEkonomiPetaniKecModel extends Model
{
    //protected $table      = 'penyuluh';
    //protected $primaryKey = 'id';


    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    //protected $allowedFields = ['nama', 'alamat', 'telpon'];


    protected $useTimestamps = false;
    // protected $createdField  = 'created_at';
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';

    // protected $validationRules    = [];
    // protected $validationMessages = [];
    // protected $skipValidation     = false;


    public function getKelembagaanEkonomiPetaniKecTotal($kode_bpp)
    {
        $db = Database::connect();
        $query = $db->query("select nama_bpp as nama_bpp from tblbpp where kecamatan='$kode_bpp'");
        $row   = $query->getRow();
        
        $query2 = $db->query("SELECT count(id_poktan) as jum FROM tb_poktan where kode_kab ='$kode_bpp'");
        $row2   = $query2->getRow();
        
      $query3   = $db->query("select id_daerah,deskripsi, count(id_kep) as jum 
                                from tbldaerah a
                                left join tb_kep b on a.id_daerah=b.kode_kec
                                where id_daerah='$kode_bpp'
                                order by deskripsi ");
        $results = $query3->getResultArray();
        $query4 = $db->query("SELECT count(id_kep) as jumkep FROM tb_kep where kode_kec ='$kode_bpp'");
        $row3   = $query4->getRow();
        $data =  [
            'jum' => $row2->jum,
            'nama_bpp' => $row->nama_bpp,
            'table_data' => $results,
            'jumkep' => $row3->jumkep,
        ];

        return $data;
    }
    
}