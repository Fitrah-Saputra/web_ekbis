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

class Admin extends BaseController
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
        if (!session()->has('username')) {
            return redirect()->to('/login');
        }
        $data = [
            'prodi' => $this->prodiModel->findAll(),
            'username' => session()->get('username')
        ];
        return view('pages/admin/index', $data);
    }

    public function save()
    {
        $data = [
            'nama_prodi' => $this->request->getVar('nama_prodi'),
            'tingkat' => $this->request->getVar('tingkat'),
        ];
        $this->prodiModel->insert($data);
        return $this->response->redirect(site_url('/admin/'));
    }

    public function delete($id = null)
    {
        $data['prodi'] = $this->prodiModel->where('id_prodi', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/'));
    }

    public function edit($id)
    {
        $data['prodi'] = $this->prodiModel->find($id);
        return view('pages/admin/admin/ubah_prodi', $data);
    }

    public function update($id)
    {
        $data = [
            'id_prodi' => $id,
            'nama_prodi' => $this->request->getVar('nama_prodi'),
            'tingkat'  => $this->request->getVar('tingkat'),
        ];
        $this->prodiModel->save($data);
        return $this->response->redirect(site_url('/admin/'));
    }

    public function dosen($id_prodi)
    {
        if ($id_prodi == 1) {
            $data['dosen'] = $this->dosenModel->getJoin()->getResult();
            return view('pages/admin/dosen/agbp', $data);
        } elseif ($id_prodi == 2) {
            $data['dosen'] = $this->dosenModel->where('id_prodi', 2)->findAll();
            return view('pages/admin/dosen/pagb', $data);
        } elseif ($id_prodi == 3) {
            $data['dosen'] = $this->dosenModel->where('id_prodi', 3)->findAll();
            return view('pages/admin/dosen/akbd', $data);
        } elseif ($id_prodi == 4) {
            $data['dosen'] = $this->dosenModel->where('id_prodi', 4)->findAll();
            return view('pages/admin/dosen/agb', $data);
        } elseif ($id_prodi == 5) {
            $data['dosen'] = $this->dosenModel->where('id_prodi', 5)->findAll();
            return view('pages/admin/dosen/akp', $data);
        } elseif ($id_prodi == 6) {
            $data['dosen'] = $this->dosenModel->where('id_prodi', 6)->findAll();
            return view('pages/admin/dosen/ak', $data);
        } elseif ($id_prodi == 7) {
            $data['dosen'] = $this->dosenModel->where('id_prodi', 7)->findAll();
            return view('pages/admin/dosen/mi', $data);
        } elseif ($id_prodi == 8) {
            $data['dosen'] = $this->dosenModel->where('id_prodi', 8)->findAll();
            return view('pages/admin/dosen/pw', $data);
        } elseif ($id_prodi == 9) {
            $data['dosen'] = $this->dosenModel->where('id_prodi', 9)->findAll();
            return view('pages/admin/dosen/hotel', $data);
        } elseif ($id_prodi == 10) {
            $data['dosen'] = $this->dosenModel->where('id_prodi', 10)->findAll();
            return view('pages/admin/dosen/ap', $data);
        } else {
            return view('errors/html/error_404');
        }
    }

    public function saveDosen($id_prodi)
    {
        if ($id_prodi == 1) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/1'));
        }
        if ($id_prodi == 2) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/2'));
        }
        if ($id_prodi == 3) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/3'));
        }
        if ($id_prodi == 4) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/4'));
        }
        if ($id_prodi == 5) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/5'));
        }
        if ($id_prodi == 6) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/6'));
        }
        if ($id_prodi == 7) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/7'));
        }
        if ($id_prodi == 8) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/8'));
        }
        if ($id_prodi == 9) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/9'));
        }
        if ($id_prodi == 10) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->insert($data);
            return $this->response->redirect(site_url('/admin/dosen/10'));
        }
    }

    public function deleteDosen($id = null)
    {
        $data['dosen'] = $this->dosenModel->where('id_dosen', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/'));
    }

    public function editDosen($id)
    {
        $data['dosen'] = $this->dosenModel->find($id);
        return view('pages/admin/dosen/ubah_dosen', $data);
    }

    public function updateDosen($id_dosen)
    {
        if ($id_dosen == 1) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_dosen == 2) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_dosen == 3) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_dosen == 4) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_dosen == 5) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_dosen == 6) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_dosen == 7) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_dosen == 8) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_dosen == 9) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_dosen == 10) {
            $data = [
                'id_dosen' => $this->request->getVar('id_dosen'),
                'nama_dosen' => $this->request->getVar('nama_dosen'),
                'nip' => $this->request->getVar('nip'),
                'golongan' => $this->request->getVar('golongan'),
            ];
            $this->dosenModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
    }

    public function matkul($id_matkul)
    {
        if ($id_matkul == 1) {
            $data['matkul'] = $this->matkulModel->getJoin()->getResult();
            return view('pages/admin/matkul/agbp', $data);
        } elseif ($id_matkul == 2) {
            $data['matkul'] = $this->matkulModel->where('id_prodi', 2)->findAll();
            return view('pages/admin/matkul/pagb', $data);
        } elseif ($id_matkul == 3) {
            $data['matkul'] = $this->matkulModel->where('id_prodi', 3)->findAll();
            return view('pages/admin/matkul/akbd', $data);
        } elseif ($id_matkul == 4) {
            $data['matkul'] = $this->matkulModel->where('id_prodi', 4)->findAll();
            return view('pages/admin/matkul/agb', $data);
        } elseif ($id_matkul == 5) {
            $data['matkul'] = $this->matkulModel->where('id_prodi', 5)->findAll();
            return view('pages/admin/matkul/akp', $data);
        } elseif ($id_matkul == 6) {
            $data['matkul'] = $this->matkulModel->where('id_prodi', 6)->findAll();
            return view('pages/admin/matkul/ak', $data);
        } elseif ($id_matkul == 7) {
            $data['matkul'] = $this->matkulModel->where('id_prodi', 7)->findAll();
            return view('pages/admin/matkul/mi', $data);
        } elseif ($id_matkul == 8) {
            $data['matkul'] = $this->matkulModel->where('id_prodi', 8)->findAll();
            return view('pages/admin/matkul/pw', $data);
        } elseif ($id_matkul == 9) {
            $data['matkul'] = $this->matkulModel->where('id_prodi', 9)->findAll();
            return view('pages/admin/matkul/hotel', $data);
        } elseif ($id_matkul == 10) {
            $data['matkul'] = $this->matkulModel->where('id_prodi', 10)->findAll();
            return view('pages/admin/matkul/ap', $data);
        } else {
            return view('errors/html/error_404');
        }
    }

    public function saveMatkul($id_matkul)
    {
        if ($id_matkul == 1) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/1'));
        }
        if ($id_matkul == 2) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/2'));
        }
        if ($id_matkul == 3) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/3'));
        }
        if ($id_matkul == 4) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/4'));
        }
        if ($id_matkul == 5) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/5'));
        }
        if ($id_matkul == 6) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/6'));
        }
        if ($id_matkul == 7) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/7'));
        }
        if ($id_matkul == 8) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/8'));
        }
        if ($id_matkul == 9) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/9'));
        }
        if ($id_matkul == 10) {
            $data = [
                'id_prodi' => $this->request->getVar('id_prodi'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->insert($data);
            return $this->response->redirect(site_url('/admin/matkul/10'));
        }
    }

    public function deleteMatkul($id = null)
    {
        $data['matkul'] = $this->matkulModel->where('id_matkul', $id)->delete($id);
        return $this->response->redirect(site_url('/admin/'));
    }

    public function editMatkul($id)
    {
        $data['matkul'] = $this->matkulModel->find($id);
        return view('pages/admin/matkul/ubah_matkul', $data);
    }

    public function updateMatkul($id_matkul)
    {
        if ($id_matkul == 1) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_matkul == 2) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_matkul == 3) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_matkul == 4) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_matkul == 5) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_matkul == 6) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_matkul == 7) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_matkul == 8) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_matkul == 9) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
        if ($id_matkul == 10) {
            $data = [
                'id_matkul' => $this->request->getVar('id_matkul'),
                'kode_matkul' => $this->request->getVar('kode_matkul'),
                'mata_kuliah' => $this->request->getVar('mata_kuliah'),
                'sks' => $this->request->getVar('sks'),
            ];
            $this->matkulModel->save($data);
            return $this->response->redirect(site_url('/admin/'));
        }
    }
}
