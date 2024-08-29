<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;


class AnggotaController extends BaseController
{
    public function anggota()
    {
        $data = [
            'title' => 'Anggota',
            //'data_satuvisi' => $this->SatuvisiModel->findAll()

        ];
        return view('admin\dashboard\anggota\anggota', $data);
    }
}
