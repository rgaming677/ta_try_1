<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Berita2Controller extends BaseController
{
    public function berita2()
    {
        return view('Berita2/berita2');
    }
}
