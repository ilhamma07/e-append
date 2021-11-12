<?php

namespace App\Models;

use CodeIgniter\Model;

use function PHPSTORM_META\map;

class KelahiranModel extends Model
{
    protected $table = 'tb_kelahiran';
    protected $primaryKey = 'id_kelahiran';
    protected $allowedFields = [
        'no_kk',
        'nama_bayi',
        'jenkel',
        'tempat_dilahirkan',
        'tempat_lahir',
        'tgl_lahir',
        'jenis_kelahiran',
        'kelahiran_ke',
        'penolong',
        'berat_bayi',
        'nik_ayah',
        'nik_ibu',
        'nik_saksi1',
        'nik_saksi2'
    ];

    public function getKelahiran($id_kelahiran = false)
    {
        if ($id_kelahiran == false) {
            return $this->findAll();
        }

        return $this->where(['id_kelahiran' => $id_kelahiran])->first();
    }
}
