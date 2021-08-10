<?php

namespace App\Controllers;

use App\Models\MPSurat;

class PSurat extends BaseController
{
    protected $MPSurat;

    public function __construct()
    {
        $this->MPSurat = new MPSurat;
    }

    public function index()
    {
        $data = [
            'surat' => $this->MPSurat->getPSurat()
        ];

        return view('surat/pengajuan', $data);
    }

    // public function detail($slug)
    // {
    //     $data = [
    //         'surat' => $this->MSurat->getSurat($slug)
    //     ];

    //     if (empty($data['surat'])) {
    //         throw new \CodeIgniter\Exceptions\PageNotFoundException('Surat ' . $slug . ' tidak ditemukan.');
    //     }

    //     return view('surat/detail', $data);
    // }

    public function save()
    {
        // if (!$this->validate([
        //     'id_surat' => 'required',
        //     'nik' => 'required',
        //     'nama' => 'required',
        //     'foto' => 'uploaded[foto]'
        // ])) {
        //     return redirect()->to('/surat')->withInput();
        // }

        $fileFoto = $this->request->getFile('foto');
        $fileFoto->move('img');
        $namaFoto = $fileFoto->getName();

        $this->MPSurat->save([
            'id_surat' => $this->request->getVar('id_surat'),
            'nik' => $this->request->getVar('nik'),
            'nama' => $this->request->getVar('nama'),
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('pesan', 'Berhasil Mengajukan Surat.');
        return view('/home');
    }
}
