<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\M_tampildata;

class Fussy extends BaseController
{
    public function __construct()
    {
        helper('some');
    }
    public function index()
    {
        //
        $Model = new M_tampildata();
        $penduduk = [
            'detail' => $Model->detail(),


        ];
        Tampilan('dashboard/data/inputdata/fussy', $penduduk);
    }
}
