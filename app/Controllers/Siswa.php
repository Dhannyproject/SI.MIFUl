<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Siswa extends BaseController
{
    public function index()
    {
        $menu = [
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
                'aktif' => '',
            ],
            'semester' => [
                'title' => 'Siswa',
                'link' => base_url() . '/siswa',
                'icon' => 'fa-solid fa-list',
                'aktif' => 'active',
            ],
            'mahasiswa' => [
                'title' => 'Alumni',
                'link' => base_url() . '/Alumni',
                'icon' => 'fa-solid fa-users',
                'aktif' => '',
            ],
        ];

        $breadcrumb = '<div class="col-sm-6">
                    <h1 class="m-0">Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href = "' . base_url() . '">Beranda</a></li>
                        <li class="breadcrumb-item active">Mahasiswa</li>
                      
                    </ol>
                </div>';
        $data['menu'] = $menu;
        $data['breadcrumb'] = $breadcrumb;
        return view('mahasiswa/content', $data);
    }
}
