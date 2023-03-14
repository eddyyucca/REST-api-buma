<?php

namespace App\Models;

use CodeIgniter\Model;

class Karyawan_m extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id_kar';
    protected $allowedFields = ['nama', 'nik'];
}
