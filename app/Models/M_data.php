<?php

namespace App\Models;

use CodeIgniter\Model;
use PHPUnit\Framework\MockObject\Stub\ReturnReference;

class M_data extends Model
{

    public function __construct()
    {
        $this->db = db_connect();
    }
    public function desa()
    {
        return $this->db->table('tb_desa')->get()->getResultArray();
    }
    public function penduduk()
    {
        return $this->db->table('tb_penduduk_pengenalan_tempat')->get()->getResultArray();
    }
    // public function  kecamatan()
    // {
    //     return $this->db->table('tb_kecamatan')->get()->getResultArray();
    // }
    public function total_kecamatan()
    {
        return $this->db->table('tb_kecamatan')->countAll();
    }
    public function total_kelurahan()
    {
        return $this->db->table('tb_desa')->countAll();
    }
    public function total_laki()
    {
        return $this->db->table('tb_penduduk_pengenalan_tempat')->select('jenis_kelamin')->where('jenis_kelamin', 'L')->countAllResults();
    }
    public function total_perempuan()
    {
        return $this->db->table('tb_penduduk_pengenalan_tempat')->select('jenis_kelamin')->where('jenis_kelamin', 'P')->countAllResults();
    }
    public function total_pmks()
    {
        return $this->db->table('tb_penduduk_pengenalan_tempat')->countAll();
    }
}
