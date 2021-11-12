<?php

namespace App\Controllers;

use App\Models\KKModel;
use App\Models\KelahiranModel;
use App\Models\AnggotaModel;

class Kelahiran extends BaseController
{
    private $kelahiranModel;
    private $anggotaModel;
    private $kkModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
        $this->kkModel = new KKModel();
        $this->kelahiranModel = new KelahiranModel();
    }

    public function index()
    {

        $kelahiran = $this->kelahiranModel->getKelahiran();
        $kependudukan = $this->anggotaModel->getAllAnggota();
        $kartuKeluarga = $this->kkModel->getKK();
        $data  = [
            "kelahiran" => $kelahiran,
            "kependudukan" => $kependudukan,
            "kk" => $kartuKeluarga,
            "validation" => \Config\Services::validation()
        ];

        return view('pages/kelahiran', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'no_kk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor KK harus di isi.'
                ]
            ],
            'nama_bayi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Bayi harus di isi.'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat lahir harus di isi.'
                ]
            ],
            'kelahiran_ke' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Urutan kelahiran harus di isi.'
                ]
            ],
            'berat_bayi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Berat bayi harus di isi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kelahiran')->withInput()->with('validation', $validation);
        }

        $date = date('Y-m-d', strtotime($this->request->getVar('tgl_lahir')));

        $this->kelahiranModel->save([
            'no_kk' => $this->request->getVar('no_kk'),
            'nama_bayi' => $this->request->getVar('nama_bayi'),
            'jenkel' => $this->request->getVar('jenkel'),
            'tempat_dilahirkan' => $this->request->getVar('tempat_dilahirkan'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $date,
            'jenis_kelahiran' => $this->request->getVar('jenis_kelahiran'),
            'kelahiran_ke' => $this->request->getVar('kelahiran_ke'),
            'penolong' => $this->request->getVar('penolong'),
            'berat_bayi' => $this->request->getVar('berat_bayi'),
            'nik_ayah' => $this->request->getVar('nik_ayah'),
            'nik_ibu' => $this->request->getVar('nik_ibu'),
            'nik_saksi1' => $this->request->getVar('nik_saksi1'),
            'nik_saksi2' => $this->request->getVar('nik_saksi2')
        ]);


        session()->setFlashdata('simpanKelahiran', 'Data dengan kelahiran ' . $this->request->getVar('nama_bayi') . ' berhasil ditambahkan');
        return redirect()->to('/kelahiran');
    }

    public function delete($id)
    {
        $this->kelahiranModel->delete($id);
        session()->setFlashdata('hapusKelahiran', 'Data Kelahiran berhasil dihapus');
        return redirect()->to('/kelahiran');
    }

    public function edit()
    {
        $id_kelahiran = $this->request->getVar('id_kelahiran');
        $kelahiran = $this->kelahiranModel->getKelahiran($id_kelahiran);
        $kependudukan = $this->anggotaModel->getAllAnggota();
        $kartuKeluarga = $this->kkModel->getKK();
        $data = [
            "kelahiran" => $kelahiran,
            "kependudukan" => $kependudukan,
            "kk" => $kartuKeluarga,
            "validation" => \Config\Services::validation()
        ];

        return view('pages/editKelahiran', $data);
    }

    public function update($id_kelahiran)
    {
        if (!$this->validate([
            'no_kk' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor KK harus di isi.'
                ]
            ],
            'nama_bayi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Bayi harus di isi.'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat lahir harus di isi.'
                ]
            ],
            'kelahiran_ke' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Urutan kelahiran harus di isi.'
                ]
            ],
            'berat_bayi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Berat bayi harus di isi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kelahiran/edit?id_kelahiran=' . $id_kelahiran)->withInput()->with('validation', $validation);
        }

        $date = date('Y-m-d', strtotime($this->request->getVar('tgl_lahir')));

        $this->kelahiranModel->save([
            'id_kelahiran' => $id_kelahiran,
            'no_kk' => $this->request->getVar('no_kk'),
            'nama_bayi' => $this->request->getVar('nama_bayi'),
            'jenkel' => $this->request->getVar('jenkel'),
            'tempat_dilahirkan' => $this->request->getVar('tempat_dilahirkan'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $date,
            'jenis_kelahiran' => $this->request->getVar('jenis_kelahiran'),
            'kelahiran_ke' => $this->request->getVar('kelahiran_ke'),
            'penolong' => $this->request->getVar('penolong'),
            'berat_bayi' => $this->request->getVar('berat_bayi'),
            'nik_ayah' => $this->request->getVar('nik_ayah'),
            'nik_ibu' => $this->request->getVar('nik_ibu'),
            'nik_saksi1' => $this->request->getVar('nik_saksi1'),
            'nik_saksi2' => $this->request->getVar('nik_saksi2')
        ]);


        session()->setFlashdata('simpanKelahiran', 'Data dengan kelahiran ' . $this->request->getVar('nama_bayi') . ' berhasil ditambahkan');
        return redirect()->to('/kelahiran');
    }

    //--------------------------------------------------------------------

}
