<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;


class DataSatuvisiController2 extends BaseController
{
    public function index2()
    {
        $data = [
            'title' => 'Data Laporan',
            //'data_satuvisi' => $this->SatuvisiModel->findAll()

        ];
        return view('admin\dashboard\data\index2', $data);
    }
}
