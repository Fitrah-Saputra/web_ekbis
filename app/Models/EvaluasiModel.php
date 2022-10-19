<?php

namespace App\Models;

use CodeIgniter\Model;

class EvaluasiModel extends Model
{
    protected $table              = 'evaluasi';
    protected $primaryKey         = 'id_evaluasi';
    protected $useAutoIncrement   = true;
    protected $allowedFields      = [
        'kegiatan', 'link'
    ];
}
