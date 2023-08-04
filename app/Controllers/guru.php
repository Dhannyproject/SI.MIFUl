<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\GuruModel;
use PhpParser\Builder\Function_;

class Guru extends BaseController
{
    protected $pm;
    private $menu;
    private $rules;

    public function __construct()
    {
        $this->pm = new GuruModel();
        $this->menu = [
            'beranda' => [
                'title' => 'Beranda',
                'link' => base_url(),
                'icon' => 'fa-solid fa-house',
                'aktif' => '',
            ],
            'prodi' => [
                'title' => 'Guru',
                'link' => base_url() . '/guru',
                'icon' => 'fa-solid fa-building-columns',
                'aktif' => 'active',
            ],
            'semester' => [
                'title' => 'Siswa',
                'link' => base_url() . '/siswa',
                'icon' => 'fa-solid fa-list',
                'aktif' => '',
            ],
            'mahasiswa' => [
                'title' => 'Alumni',
                'link' => base_url() . '/alumni',
                'icon' => 'fa-solid fa-users',
                'aktif' => '',
            ],
        ];
        $this->rules = [
            'kd_guru' => 'required',
            'nama_guru' => 'required',
            'tanggal_lahir' => 'required',
            'alamat' => 'required',

        ];
    }

    public function index()
    {

        $breadcrumb = '<div class="col-sm-6">
                    <h1 class="m-0">Guru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href = "' . base_url() . '">Beranda</a></li>
                        <li class="breadcrumb-item active">Guru</li>
                      
                    </ol>
                </div>';
        $data['menu'] = $this->menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = "Data Guru";


        $query = $this->pm->find();
        $data['data_guru'] = $query;
        return view('guru/content', $data);
    }
    public function tambah()
    {
        $breadcrumb = '<div class="col-sm-6">
                    <h1 class="m-0">Guru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href = "' . base_url() . '">Beranda</a></li>
                        <li class="breadcrumb-item"><a href ="' . base_url() . '">Guru</a></li>
                        <li class="breadcrumb-item active">Tambah Guru</li>
                    </ol>
                </div>';
        $data['menu'] = $this->menu;
        $data['breadcrumb'] = $breadcrumb;
        $data['title_card'] = 'Tambah Guru';
        $data['action'] = base_url() . '/guru/simpan';
        return view('guru/input', $data);
    }

    public function simpan()
    {
        $breadcrumb = '<div class="col-sm-6">
                    <h1 class="m-0">Guru</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href = "' . base_url() . '">Beranda</a></li>
                        <li class="breadcrumb-item"><a href ="' . base_url() . '">Guru</a></li>
                        <li class="breadcrumb-item active">Tambah Guru</li>
                    </ol>
                </div>';
        if (strtolower($this->request->getmethod()) !== 'post') {

            return view('guru/input',);
        }
        if (!$this->validate($this->rules)) {
            return view('guru/input',);
        }
        $dt = $this->request->getPost();

        $simpan = $this->pm->insert($dt);
        dd($simpan);
    }
}
