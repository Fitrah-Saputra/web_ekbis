<?php

namespace App\Models;

use CodeIgniter\Model;

class ProfilModel extends Model
{
    protected $table              = 'profil';
    protected $primaryKey         = 'id_profil';
    protected $useAutoIncrement   = true;
    protected $allowedFields      = [
        'sambutan', 'penutup', 'struktur_organisasi'
    ];
}
