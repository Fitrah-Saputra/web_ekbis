<?php

namespace App\Models;

use CodeIgniter\Model;

class MatkulModel extends Model
{
    protected $table              = 'matkul';
    protected $primaryKey         = 'id_matkul';
    protected $useAutoIncrement   = true;
    protected $allowedFields      = [
        'id_prodi', 'kode_matkul', 'mata_kuliah', 'sks'
    ];
}
