<?php

namespace App\Controllers;

use App\Models\ProfilModel;
use App\Models\InfoModel;
use App\Models\EvaluasiModel;
use App\Models\EdomModel;
use App\Models\SasaranMutuModel;
use App\Models\ProdiModel;
use App\Models\DosenModel;
use App\Models\MatkulModel;

class Pages extends BaseController
{
    protected $profilModel;
    protected $infoModel;
    protected $evaluasiModel;
    protected $edomModel;
    protected $sasaranModel;
    protected $prodiModel;
    protected $dosenModel;
    protected $matkulModel;

    public function __construct()
    {
        $this->profilModel    = new ProfilModel();
        $this->infoModel      = new InfoModel();
        $this->evaluasiModel  = new EvaluasiModel();
        $this->edomModel      = new EdomModel();
        $this->sasaranModel   = new SasaranMutuModel();
        $this->prodiModel     = new ProdiModel();
        $this->dosenModel     = new DosenModel();
        $this->matkulModel    = new MatkulModel();
    }

    public function index()
    {
        return view('pages/landing_page');
    }

    public function sambutan()
    {
        $data['profil'] = $this->profilModel->findAll();
        return view('pages/profil/sambutan', $data);
    }

    public function struktur()
    {
        $data['struktur'] = $this->profilModel->findAll();
        return view('pages/profil/struktur', $data);
    }

    public function tupoksi()
    {
        return view('pages/profil/tupoksi');
    }

    public function evaluasi()
    {
        $data['evaluasi'] = $this->evaluasiModel->findAll();
        return view('pages/profil/evaluasi', $data);
    }

    public function edom()
    {
        $data['edom'] = $this->edomModel->findAll();
        return view('pages/profil/edom', $data);
    }

    public function sasaran()
    {
        $data['sasaran'] = $this->sasaranModel->findAll();
        return view('pages/profil/sasaran', $data);
    }

    public function info()
    {
        $data['info'] = $this->infoModel->findAll();
        return view('pages/info/info', $data);
    }

    public function anti_plagiat()
    {
        return view('pages/info/anti_plagiat');
    }

    public function sop()
    {
        return view('pages/info/sop');
    }

    public function prodi($id_prodi)
    {
        if ($id_prodi == 1) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/agbp', $data);
        } elseif ($id_prodi == 2) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/pagb', $data);
        } elseif ($id_prodi == 3) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/akbd', $data);
        } elseif ($id_prodi == 4) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/agb', $data);
        } elseif ($id_prodi == 5) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/akp', $data);
        } elseif ($id_prodi == 6) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/ak', $data);
        } elseif ($id_prodi == 7) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/mi', $data);
        } elseif ($id_prodi == 8) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/pw', $data);
        } elseif ($id_prodi == 9) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/hotel', $data);
        } elseif ($id_prodi == 10) {
            $id   = $id_prodi;
            $data = [
                'detail' => $this->prodiModel->findAll(),
                'id' => $id,
            ];
            return view('pages/prodi/ap', $data);
        } else {
            return view('errors/html/error_404');
        }
    }

    public function dosen($id_prodi)
    {
        if ($id_prodi == 1) {
            $data['detail'] = $this->dosenModel->getJoin()->getResult();
            return view('pages/dosen/agbp', $data);
        } elseif ($id_prodi == 2) {
            $data['detail'] = $this->dosenModel->where('id_prodi', 2)->findAll();
            return view('pages/dosen/pagb', $data);
        } elseif ($id_prodi == 3) {
            $data['detail'] = $this->dosenModel->where('id_prodi', 3)->findAll();
            return view('pages/dosen/akbd', $data);
        } elseif ($id_prodi == 4) {
            $data['detail'] = $this->dosenModel->where('id_prodi', 4)->findAll();
            return view('pages/dosen/agb', $data);
        } elseif ($id_prodi == 5) {
            $data['detail'] = $this->dosenModel->where('id_prodi', 5)->findAll();
            return view('pages/dosen/akp', $data);
        } elseif ($id_prodi == 6) {
            $data['detail'] = $this->dosenModel->where('id_prodi', 6)->findAll();
            return view('pages/dosen/ak', $data);
        } elseif ($id_prodi == 7) {
            $data['detail'] = $this->dosenModel->where('id_prodi', 7)->findAll();
            return view('pages/dosen/mi', $data);
        } elseif ($id_prodi == 8) {
            $data['detail'] = $this->dosenModel->where('id_prodi', 8)->findAll();
            return view('pages/dosen/pw', $data);
        } elseif ($id_prodi == 9) {
            $data['detail'] = $this->dosenModel->where('id_prodi', 9)->findAll();
            return view('pages/dosen/hotel', $data);
        } elseif ($id_prodi == 10) {
            $data['detail'] = $this->dosenModel->where('id_prodi', 10)->findAll();
            return view('pages/dosen/ap', $data);
        } else {
            return view('errors/html/error_404');
        }
    }

    public function matkul($id_prodi)
    {
        if ($id_prodi == 1) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 1)->findAll();
            return view('pages/matkul/agbp', $data);
        } elseif ($id_prodi == 2) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 2)->findAll();
            return view('pages/matkul/pagb', $data);
        } elseif ($id_prodi == 3) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 3)->findAll();
            return view('pages/matkul/akbd', $data);
        } elseif ($id_prodi == 4) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 4)->findAll();
            return view('pages/matkul/agb', $data);
        } elseif ($id_prodi == 5) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 5)->findAll();
            return view('pages/matkul/akp', $data);
        } elseif ($id_prodi == 6) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 6)->findAll();
            return view('pages/matkul/ak', $data);
        } elseif ($id_prodi == 7) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 7)->findAll();
            return view('pages/matkul/mi', $data);
        } elseif ($id_prodi == 8) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 8)->findAll();
            return view('pages/matkul/pw', $data);
        } elseif ($id_prodi == 9) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 9)->findAll();
            return view('pages/matkul/hotel', $data);
        } elseif ($id_prodi == 10) {
            $data['detail'] = $this->matkulModel->where('id_prodi', 10)->findAll();
            return view('pages/matkul/ap', $data);
        } else {
            return view('errors/html/error_404');
        }
    }

    public function contact()
    {
        return view('pages/kontak/kontak');
    }
}
