<?php

namespace App\Models;

use CodeIgniter\Model;

class InfoModel extends Model
{
    protected $table              = 'info_jurusan';
    protected $primaryKey         = 'id_info_jurusan';
    protected $useAutoIncrement   = true;
    protected $allowedFields      = [
        'deskripsi', 'visi', 'motto'
    ];
}
