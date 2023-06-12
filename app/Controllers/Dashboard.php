<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        // return view('welcome_message');
        echo view('layouts/v_header');

        echo view('layouts/v_sidebar');
        echo view('layouts/v_topbar');
        echo view('dashboard/index');
        echo view('layouts/v_footer');
    }
}
