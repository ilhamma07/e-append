<?php

namespace App\Models;

use CodeIgniter\Model;

class KKModel extends Model
{
    protected $table = 'tb_kk';
    protected $primaryKey = 'id_kk';
    protected $allowedFields = ['no_kk', 'kepala_keluarga', 'alamat', 'rt', 'rw'];

    public function getKK($noKK = false)
    {
        if ($noKK == false) {
            return $this->findAll();
        }

        return $this->where(['no_kk' => $noKK])->first();
    }

    public function getKKById($id_kk = false)
    {
        return $this->where(['id_kk' => $id_kk])->first();
    }
}
