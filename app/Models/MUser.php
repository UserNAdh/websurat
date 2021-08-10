<?php

namespace App\Models;

use CodeIgniter\Model;

class MUser extends Model
{
    protected $table = 'user';
    protected $primaryKey = 'id';

    protected $allowedFields = ['username', 'email', 'password'];

    protected $useTimestamps = true;

    public function getSum()
    {
    }
}
