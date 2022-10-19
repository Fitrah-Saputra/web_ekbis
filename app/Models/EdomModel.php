<?php

namespace App\Models;

use CodeIgniter\Model;

class EdomModel extends Model
{
    protected $table              = 'edom';
    protected $primaryKey         = 'id_edom';
    protected $useAutoIncrement   = true;
    protected $allowedFields      = [
        'kegiatan', 'link'
    ];
}
