<?php

namespace App\Controllers;

use App\Models\MSurat;
use App\Models\MPSurat;

class Admin extends BaseController
{
    protected $MSurat;
    protected $MPSurat;

    public function __construct()
    {
        $this->MSurat = new MSurat;
        $this->MPSurat = new MPSurat;
    }

    public function index()
    {
        return view('admin/login');
    }

    public function register()
    {
        session();
        $data = [
            'validate' => \Config\Services::validation()
        ];
        return view('admin/register', $data);
    }

    public function home()
    {
        $data = [
            'surat' => $this->MSurat->getSurat()
        ];
        return view('admin/dashboard', $data);
    }

    public function pengajuan()
    {
        $data = [
            'psurat' => $this->MPSurat->getPSurat()
        ];
        return view('admin/pengajuan', $data);
    }
}
