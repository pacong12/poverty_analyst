<?php

namespace App\Controllers;

use App\Models\M_data;


class Home extends BaseController
{
    public function index()

    {

        // return view('welcome_message');
        Tampilan('home/index');
    }
}
