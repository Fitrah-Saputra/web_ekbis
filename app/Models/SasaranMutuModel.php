<?php

namespace App\Models;

use CodeIgniter\Model;

class SasaranMutuModel extends Model
{
    protected $table              = 'sasaran_mutu';
    protected $primaryKey         = 'id_sasaran_mutu';
    protected $useAutoIncrement   = true;
    protected $allowedFields      = [
        'kegiatan', 'link'
    ];
}
