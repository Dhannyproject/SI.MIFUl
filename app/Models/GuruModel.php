<?php

namespace App\Models;

use CodeIgniter\Model;

class GuruModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'guru';
    protected $primaryKey       = 'kdguru';
    protected $useAutoIncrement = false;
    protected $allowedFields    = ['kdguru', 'nama_guru', 'tanggal_lahir', 'alamat'];
}
