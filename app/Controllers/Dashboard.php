<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Dashboard extends BaseController
{
    private $anggotaModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $penduduk = $this->anggotaModel->getAnggota();
        $data  = [
            "jumlah" => $penduduk
        ];
        return view('pages/dashboard', $data);
    }

    //--------------------------------------------------------------------

}
