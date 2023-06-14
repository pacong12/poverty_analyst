<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\M_data;

class Dashboard extends Controller
{
    public function __construct()
    {
        helper('some');
    }
    public function index()
    {

        $Model = new M_data();
        $All = [
            'penduduk' => $Model->penduduk(),
            'total_kecamatan' => $Model->total_kecamatan(),
            'total_kelurahan' => $Model->total_kelurahan(),
            'total_laki' => $Model->total_laki(),
            'total_perempuan' => $Model->total_perempuan(),
            'total_pmks' => $Model->total_pmks(),

        ];

        // return view('welcome_message');
        echo view('layouts/v_header');

        echo view('layouts/v_sidebar');
        echo view('layouts/v_topbar');
        echo view('dashboard/index', $All);
        echo view('layouts/v_footer');
    }
}
