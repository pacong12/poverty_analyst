<?php

namespace App\Controllers;

use CodeIgniter\Controller;

use App\Models\M_tampildata;

class Tampil extends Controller
{
    public function __construct()
    {
        helper('some');
    }
    public function index()
    {

        $Tampildata = new M_tampildata();
        $data = [
            'tampil' => $Tampildata->getAll(),


        ];
        Tampilan('dashboard/data/inputdata/index', $data);
    }
}
