<?php

namespace App\Models;

use CodeIgniter\Model;

class KematianModel extends Model
{
    protected $table = 'tb_kematian';
    protected $primaryKey = 'id_kematian';
    protected $allowedFields = [
        'nik',
        'tgl_kematian',
        'waktu_kematian',
        'sebab_kematian',
        'tempat_kematian',
        'penerang',
        'nik_pelapor',
        'nik_saksi1',
        'nik_saksi2'
    ];

    public function getKematian($nik = false)
    {
        if ($nik == false) {
            return $this->findAll();
        }

        return $this->where(['nik' => $nik])->first();
    }
}
