<?php

namespace App\Models;

use CodeIgniter\Model;

class SatuvisiModel extends Model
{
    protected $table            = 'Satuvisi_Data';
    protected $primaryKey       = 'id_satuvisi';
    protected $returnType       = 'object';
    protected $allowedFields    = ['nama_satuvisi', 'slug_kategori'];


    protected bool $allowEmptyInserts = false;
    protected bool $updateOnlyChanged = true;

    protected array $casts = [];
    protected array $castHandlers = [];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'tanggal_input';
    protected $updatedField  = 'tanggal_ubah';
}
