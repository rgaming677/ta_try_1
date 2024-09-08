<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;


class UpdocController extends BaseController
{
    public function uploaddoc()
    {
        $data = [
            'title' => 'Upload Dokumentasi',
            //'data_satuvisi' => $this->SatuvisiModel->findAll()

        ];
        return view('admin\dashboard\upload-doc\uploaddoc', $data);
    }
}
