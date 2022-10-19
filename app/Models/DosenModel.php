<?php

namespace App\Models;

use CodeIgniter\Model;

class DosenModel extends Model
{
    protected $table              = 'dosen';
    protected $primaryKey         = 'id_dosen';
    protected $useAutoIncrement   = true;
    protected $allowedFields      = [
        'id_prodi', 'nama_dosen', 'nip', 'golongan'
    ];

    public function getJoin()
    {
        $builder = $this->db->table('dosen');
        $builder->join('prodi', 'prodi.id_prodi = dosen.id_dosen');
        $query = $builder->get();
        return $query;
    }
}
