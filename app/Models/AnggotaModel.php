<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'tb_anggota';
    protected $primaryKey = 'id_anggota';
    protected $allowedFields = [
        'id_kk',
        'nik',
        'nama_lengkap',
        'tempat_lahir',
        'tgl_lahir',
        'jenkel',
        'alamat',
        'agama',
        'pendidikan',
        'pekerjaan',
        'status_perkawinan',
        'status_keluarga',
        'kewarganegaraan',
        'no_passport',
        'no_kitas',
        'nama_ayah',
        'nama_ibu'
    ];

    public function getAnggota($id_kk = null)
    {
        if ($id_kk) {
            return $this->where(['id_kk' => $id_kk])->findAll();
        }
        return $this->countAllResults();
    }

    public function getAllAnggota()
    {
        return $this->findAll();
    }

    public function getAnggotaByNik($nik)
    {
        return $this->where(["nik" => $nik])->first();
    }
}
