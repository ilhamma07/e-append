<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\KKModel;

class Surat extends BaseController
{

    public function index()
    {
        $anggotaModel = new AnggotaModel();
        $kependudukan = $anggotaModel->getAllAnggota();
        $data  = [
            "kependudukan" => $kependudukan,
            "validation" => \Config\Services::validation()
        ];

        return view('pages/surat', $data);
    }

    public function generate()
    {
        $nik = $this->request->getVar('nik');
        $jenis = $this->request->getVar('jenis_surat');

        $anggotaModel = new AnggotaModel();
        $kkModel = new KKModel();
        $kependudukan = $anggotaModel->getAnggotaByNik($nik);

        $kk = $kkModel->getKKById($kependudukan['id_kk']);

        $data  = [
            "nomor" => $this->request->getVar('nomor_surat'),
            "kependudukan" => $kependudukan,
            "kk" => $kk,
            "date" => date('d-m-Y'),
            "validation" => \Config\Services::validation()
        ];

        if ($jenis == '1') {
            return view('pages/suratDomisili', $data);
        }
    }

    //--------------------------------------------------------------------

}
