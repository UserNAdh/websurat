<?php

namespace App\Controllers;

use App\Models\MSurat;

class Surat extends BaseController
{
    protected $MSurat;

    public function __construct()
    {
        $this->MSurat = new MSurat;
    }

    public function index()
    {
        // $surat = $this->MSurat->findAll();

        $data = [
            'surat' => $this->MSurat->getSurat()
        ];

        return view('surat/index', $data);
    }

    public function detail($slug)
    {
        $data = [
            'surat' => $this->MSurat->getSurat($slug)
        ];

        if (empty($data['surat'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Surat ' . $slug . ' tidak ditemukan.');
        }

        return view('surat/detail', $data);
    }

    public function save()
    {
        dd($this->request->getVar());
    }
}
