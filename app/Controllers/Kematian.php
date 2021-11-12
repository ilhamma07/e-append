<?php

namespace App\Controllers;

use App\Models\KematianModel;
use App\Models\AnggotaModel;

class Kematian extends BaseController
{
    private $kematianModel;
    private $anggotaModel;

    public function __construct()
    {
        $this->kematianModel = new KematianModel();
        $this->anggotaModel = new AnggotaModel();
    }

    public function index()
    {
        $kematian = $this->kematianModel->getKematian();
        $kependudukan = $this->anggotaModel->getAllAnggota();
        $data  = [
            "kematian" => $kematian,
            "kependudukan" => $kependudukan,
            "validation" => \Config\Services::validation()
        ];

        return view('pages/kematian', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[tb_kematian.nik]',
                'errors' => [
                    'required' => 'Nomor Induk Kependudukan harus di isi.',
                    'is_unique' => 'Nomor Induk Kependudukan sudah terdaftar'
                ]
            ],
            'tempat_kematian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Kematian harus di isi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kematian')->withInput()->with('validation', $validation);
        }

        $date = date('Y-m-d', strtotime($this->request->getVar('tgl_kematian')));

        $this->kematianModel->save([
            'nik' => $this->request->getVar('nik'),
            'tgl_kematian' => $date,
            'waktu_kematian' => $this->request->getVar('waktu_kematian'),
            'sebab_kematian' => $this->request->getVar('sebab_kematian'),
            'tempat_kematian' => $this->request->getVar('tempat_kematian'),
            'penerang' => $this->request->getVar('penerang'),
            'nik_pelapor' => $this->request->getVar('nik_pelapor'),
            'nik_saksi1' => $this->request->getVar('nik_saksi1'),
            'nik_saksi2' => $this->request->getVar('nik_saksi2')
        ]);


        session()->setFlashdata('simpanKematian', 'Data kematian dengan NIK : ' . $this->request->getVar('nik') . ' berhasil ditambahkan');
        return redirect()->to('/kematian');
    }

    public function delete($id)
    {
        $this->kematianModel->delete($id);
        session()->setFlashdata('hapusKematian', 'Data Kematian berhasil dihapus');
        return redirect()->to('/kematian');
    }

    public function edit()
    {
        $nik = $this->request->getVar('nik');
        $kematian = $this->kematianModel->getKematian($nik);
        $kependudukan = $this->anggotaModel->getAllAnggota();
        $data = [
            "kematian" => $kematian,
            "kependudukan" => $kependudukan,
            "validation" => \Config\Services::validation()
        ];

        return view('pages/editKematian', $data);
    }

    public function update($id_kematian)
    {
        $nikLama = $this->kematianModel->getKematian($this->request->getVar('nik_hidden'));
        if ($nikLama['nik'] == $this->request->getVar('nik')) {
            $ruleNik = 'required';
        } else {
            $ruleNik = 'required|is_unique[tb_kematian.nik]';
        }

        if (!$this->validate([
            'nik' => [
                'rules' => $ruleNik,
                'errors' => [
                    'required' => 'Nomor Induk Kependudukan harus di isi.',
                    'is_unique' => 'Nomor Induk Kependudukan sudah terdaftar'
                ]
            ],
            'tempat_kematian' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Kematian harus di isi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kematian/edit?nik=' . $this->request->getVar('nik'))->withInput()->with('validation', $validation);
        }

        $date = date('Y-m-d', strtotime($this->request->getVar('tgl_kematian')));

        $this->kematianModel->save([
            'id_kematian' => $id_kematian,
            'nik' => $this->request->getVar('nik'),
            'tgl_kematian' => $date,
            'waktu_kematian' => $this->request->getVar('waktu_kematian'),
            'sebab_kematian' => $this->request->getVar('sebab_kematian'),
            'tempat_kematian' => $this->request->getVar('tempat_kematian'),
            'penerang' => $this->request->getVar('penerang'),
            'nik_pelapor' => $this->request->getVar('nik_pelapor'),
            'nik_saksi1' => $this->request->getVar('nik_saksi1'),
            'nik_saksi2' => $this->request->getVar('nik_saksi2')
        ]);


        session()->setFlashdata('updateKematian', 'Data kematian dengan NIK : ' . $this->request->getVar('nik') . ' berhasil diubah');
        return redirect()->to('/kematian');
    }
    //--------------------------------------------------------------------

}
