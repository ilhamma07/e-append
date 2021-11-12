<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use PDO;

class Anggota extends BaseController
{
    private $anggotaModel;

    public function __construct()
    {
        $this->anggotaModel = new AnggotaModel();
    }

    public function save()
    {
        if (!$this->validate([
            'nik' => [
                'rules' => 'required|is_unique[tb_anggota.nik]',
                'errors' => [
                    'required' => 'Nomor Induk Kependudukan harus di isi.',
                    'is_unique' => 'Nomor Induk Kependudukan sudah terdaftar'
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap penduduk harus di isi.'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Lahir penduduk harus di isi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat penduduk harus di isi.'
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan penduduk harus di isi.'
                ]
            ],
            'nama_ayah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Ayag penduduk harus di isi.'
                ]
            ],
            'nama_ibu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Ibu penduduk harus di isi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kk/' . $this->request->getVar('no_kk_hidden'))->withInput()->with('validation', $validation);
        }

        $date = date('Y-m-d', strtotime($this->request->getVar('tgl_lahir')));

        $this->anggotaModel->save([
            'id_kk' => $this->request->getVar('id_kk_hidden'),
            'nik' => $this->request->getVar('nik'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $date,
            'jenkel' => $this->request->getVar('jenkel'),
            'alamat' => $this->request->getVar('alamat'),
            'agama' => $this->request->getVar('agama'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'status_keluarga' => $this->request->getVar('status_keluarga'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'nomor_pasport' => $this->request->getVar('nomor_pasport'),
            'nomor_kitas' => $this->request->getVar('nomor_kitas'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu')
        ]);


        session()->setFlashdata('simpanAnggota', 'Data dengan nomor NIK : ' . $this->request->getVar('nik') . ' berhasil ditambahkan');
        return redirect()->to('/kk/' . $this->request->getVar('no_kk_hidden'));
    }

    public function delete($id)
    {
        $this->anggotaModel->delete($id);
        session()->setFlashdata('hapusAnggota', 'Data Anggota berhasil dihapus');
        return redirect()->to('/kk/' . $this->request->getVar('no_kk'));
    }

    public function edit()
    {
        $no_kk = $this->request->getVar('no_kk');
        $nik = $this->request->getVar('nik');
        $anggota = $this->anggotaModel->getAnggotaByNik($nik);
        $data = [
            "a" => $anggota,
            "no_kk" => $no_kk,
            "validation" => \Config\Services::validation()
        ];

        return view('pages/editAnggota', $data);
    }

    public function update($id_anggota)
    {
        $nikLama = $this->anggotaModel->getAnggotaByNik($this->request->getVar('nik_hidden'));
        if ($nikLama['nik'] == $this->request->getVar('nik')) {
            $ruleNik = 'required';
        } else {
            $ruleNik = 'required|is_unique[tb_anggota.nik]';
        }

        if (!$this->validate([
            'nik' => [
                'rules' => $ruleNik,
                'errors' => [
                    'required' => 'Nomor Induk Kependudukan harus di isi.',
                    'is_unique' => 'Nomor Induk Kependudukan sudah terdaftar'
                ]
            ],
            'nama_lengkap' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Lengkap penduduk harus di isi.'
                ]
            ],
            'tempat_lahir' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Tempat Lahir penduduk harus di isi.'
                ]
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat penduduk harus di isi.'
                ]
            ],
            'pekerjaan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Pekerjaan penduduk harus di isi.'
                ]
            ],
            'nama_ayah' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Ayag penduduk harus di isi.'
                ]
            ],
            'nama_ibu' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Ibu penduduk harus di isi.'
                ]
            ],
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('/kk/' . $this->request->getVar('no_kk_hidden'))->withInput()->with('validation', $validation);
        }

        $date = date('Y-m-d', strtotime($this->request->getVar('tgl_lahir')));

        $this->anggotaModel->save([
            'id_anggota' => $id_anggota,
            'nik' => $this->request->getVar('nik'),
            'nama_lengkap' => $this->request->getVar('nama_lengkap'),
            'tempat_lahir' => $this->request->getVar('tempat_lahir'),
            'tgl_lahir' => $date,
            'jenkel' => $this->request->getVar('jenkel'),
            'alamat' => $this->request->getVar('alamat'),
            'agama' => $this->request->getVar('agama'),
            'pendidikan' => $this->request->getVar('pendidikan'),
            'pekerjaan' => $this->request->getVar('pekerjaan'),
            'status_perkawinan' => $this->request->getVar('status_perkawinan'),
            'status_keluarga' => $this->request->getVar('status_keluarga'),
            'kewarganegaraan' => $this->request->getVar('kewarganegaraan'),
            'nomor_pasport' => $this->request->getVar('nomor_pasport'),
            'nomor_kitas' => $this->request->getVar('nomor_kitas'),
            'nama_ayah' => $this->request->getVar('nama_ayah'),
            'nama_ibu' => $this->request->getVar('nama_ibu')
        ]);


        session()->setFlashdata('updateAnggota', 'Data dengan nomor NIK : ' . $this->request->getVar('nik') . ' berhasil diubah');
        return redirect()->to('/kk/' . $this->request->getVar('no_kk_hidden'));
    }
    //--------------------------------------------------------------------

}
