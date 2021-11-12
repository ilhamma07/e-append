<?php

namespace App\Controllers;

use App\Models\KKModel;
use App\Models\AnggotaModel;

class KK extends BaseController
{
    private $kkModel;

    public function __construct()
    {
        $this->kkModel = new KKModel();
    }

    public function index()
    {
        $kk = $this->kkModel->getKK();
        $data = [
            "kk" => $kk,
            "validation" => \Config\Services::validation()
        ];
        return view('pages/kk', $data);
    }

    public function detail($no_kk)
    {
        $kk = $this->kkModel->getKK($no_kk);
        $aModel = new AnggotaModel();
        $anggota = $aModel->getAnggota($kk['id_kk']);
        // dd($anggota);
        $data = [
            "kk" => $kk,
            "anggota" => $anggota,
            "validation" => \Config\Services::validation()
        ];

        if (empty($data['kk'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data dengan nomor KK ' . $no_kk . ' tidak ditemukan');
        }

        return view('pages/detailKK', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'no_kk' => [
                'rules' => 'required|is_unique[tb_kk.no_kk]',
                'errors' => [
                    'required' => 'Nomor KK harus di isi.',
                    'is_unique' => 'Nomor KK sudah terdaftar'
                ]
            ],
            'kepala_keluarga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kepala Keluarga harus di isi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus di isi.'
                ]
            ],
            'rt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor RT harus di isi.'
                ]
            ],
            'rw' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor RW harus di isi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kk')->withInput()->with('validation', $validation);
        }

        $this->kkModel->save([
            'no_kk' => $this->request->getVar('no_kk'),
            'kepala_keluarga' => $this->request->getVar('kepala_keluarga'),
            'alamat' => $this->request->getVar('alamat'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw')
        ]);


        session()->setFlashdata('simpanKK', 'Data dengan nomor KK : ' . $this->request->getVar('no_kk') . ' berhasil ditambahkan');
        return redirect()->to('/kk');
    }

    public function delete($id)
    {
        $this->kkModel->delete($id);
        session()->setFlashdata('hapusKK', 'Data KK berhasil dihapus');
        return redirect()->to('/kk');
    }

    public function update($id_kk)
    {

        //Cek Nomor KK
        $kkLama = $this->kkModel->getKK($this->request->getVar('no_kk_hidden'));
        if ($kkLama['no_kk'] == $this->request->getVar('no_kk')) {
            $ruleKK = 'required';
        } else {
            $ruleKK = 'required|is_unique[tb_kk.no_kk]';
        }

        if (!$this->validate([
            'no_kk' => [
                'rules' => $ruleKK,
                'errors' => [
                    'required' => 'Nomor KK harus di isi.',
                    'is_unique' => 'Nomor KK sudah terdaftar'
                ]
            ],
            'kepala_keluarga' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Kepala Keluarga harus di isi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat harus di isi.'
                ]
            ],
            'rt' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor RT harus di isi.'
                ]
            ],
            'rw' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nomor RW harus di isi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kk/' . $this->request->getVar('no_kk'))->withInput()->with('validation', $validation);
        }

        $this->kkModel->save([
            'id_kk' => $id_kk,
            'no_kk' => $this->request->getVar('no_kk'),
            'kepala_keluarga' => $this->request->getVar('kepala_keluarga'),
            'alamat' => $this->request->getVar('alamat'),
            'rt' => $this->request->getVar('rt'),
            'rw' => $this->request->getVar('rw')
        ]);

        session()->setFlashdata('updateKK', 'Data KK berhasil diupdate');
        return redirect()->to('/kk/' . $this->request->getVar('no_kk'));
    }

    //--------------------------------------------------------------------

}
