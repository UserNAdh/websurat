<?php

namespace App\Models;

use CodeIgniter\Model;

class MSurat extends Model
{
    protected $table = 'surat';
    protected $primaryKey = 'id_surat';
    protected $useTimestamps = true;

    public function getSurat($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}
