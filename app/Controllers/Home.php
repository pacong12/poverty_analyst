<?php

namespace App\Controllers;



class Home extends BaseController
{
    public function index()
    {
        // return view('welcome_message');
        echo view('layouts/v_header');

        echo view('layouts/v_sidebar');
        echo view('layouts/v_topbar');
        echo view('home/index');
        echo view('layouts/v_footer');
    }
}
