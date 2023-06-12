<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_data;

class Data extends Controller
{
    public function __construct()
    {
        helper('some');
    }
    public function index()
    {
        $Model = new M_data();
        $data = [

            'data' => $Model->getAllData()
        ];
        Tampilan('data/index', $data);
    }
}
