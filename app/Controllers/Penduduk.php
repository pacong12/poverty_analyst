<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_data;

class Penduduk extends Controller
{
    public function __construct()
    {
        helper('some');
    }
    public function index()
    {
        $Model = new M_data();
        $penduduk = [
            'penduduk' => $Model->penduduk(),


        ];
        Tampilan('dashboard/data/inputdata/inputpmks', $penduduk);
    }
}
