<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Berita3Controller extends BaseController
{
    public function berita3()
    {
        return view('Berita3/berita3');
    }
}
