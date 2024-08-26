<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Berita1Controller extends BaseController
{
    public function berita1()
    {
        return view('Berita/berita1');
    }
}
