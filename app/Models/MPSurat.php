<?php

namespace App\Models;

use CodeIgniter\Model;

class MPSurat extends Model
{
    protected $table = 'pengajuan_surat';
    protected $primaryKey = 'id_peng';
    protected $useTimestamps = true;
    protected $allowedFields = ['id_surat', 'nik', 'nama', 'foto'];

    public function getPSurat()
    {
        return $this->findAll();
    }

    // public function getSum($id)
    // {
    //     return $this->db->table('siswa')
    //         ->join('kelas', 'kelas.IDKelas=siswa.IDKelas')
    //         ->join('jurusan', 'jurusan.IDJurusan=siswa.IDJurusan')
    //         ->get()->getResultArray();
    // }

    // public function getNamaSurat()
    // {
    //     return $this->db->table('surat')
    //         ->select('nama_surat')
    //         ->join('pengajuan_surat', 'pengajuan_surat.id_surat=surat.id_surat')
    //         ->get()->getResultArray();
    // }

    public function getNamaSurat($id)
    {
        return $this->db->table('surat')
            ->select('nama_surat')
            ->from('surat')
            ->join('pengajuan_surat', 'pengajuan_surat.id_surat=surat.id_surat')
            ->where('id_surat', $id)
            ->get();
    }
}
