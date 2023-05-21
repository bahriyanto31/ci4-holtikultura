<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelWilayah extends Model
{
    protected $table = 'wilayah';
    protected $primaryKey = 'id_wilayah';
    protected $allowedFields = ['nama_wilayah'];
}
