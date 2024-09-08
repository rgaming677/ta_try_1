<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\SatuvisiModel;


class UpberitaController extends BaseController
{
    public function uploadberita()
    {
        $data = [
            'title' => 'Upload Berita',
            //'data_satuvisi' => $this->SatuvisiModel->findAll()

        ];
        return view('admin\dashboard\upload_berita\uploadberita', $data);
    }
}
