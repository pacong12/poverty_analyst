<?php

namespace App\Models;

use CodeIgniter\Model;

class M_tampildata extends Model
{
    // protected $DBGroup          = 'default';
    protected $table            = 'tb_klasifikasi_penduduk';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    // protected $allowedFields    = [', 'jenis_pmks'];

    function getAll()
    {
        $builder = $this->db->table('tb_klasifikasi_penduduk');
        $builder->join('tb_kecamatan', 'tb_kecamatan.kecamatan_id=tb_klasifikasi_penduduk.kecamatan');
        $builder->join('tb_desa', 'tb_desa.id_desa=tb_klasifikasi_penduduk.kelurahan');
        $builder->join('tb_penduduk_pengenalan_tempat', 'tb_penduduk_pengenalan_tempat.id=tb_klasifikasi_penduduk.tempat_id');

        $query = $builder->get();
        return $query->getResult();
    }
    function detail()
    {
        $builder = $this->db->table('tb_klasifikasi_penduduk');
        $builder->join('tb_penduduk_kepemilikan_aset', 'tb_penduduk_kepemilikan_aset.id=tb_klasifikasi_penduduk.aset_id', 'inner');
        $builder->join('tb_penduduk_keterangan_rumah', 'tb_penduduk_keterangan_rumah.id=tb_klasifikasi_penduduk.rumah_id', 'inner');
        $builder->join('tb_penduduk_pengenalan_tempat', 'tb_penduduk_pengenalan_tempat.id=tb_klasifikasi_penduduk.tempat_id', 'inner');
        $builder->join('tb_kecamatan', 'tb_kecamatan.kecamatan_id=tb_klasifikasi_penduduk.kecamatan', 'inner');
        $builder->join('tb_desa', 'tb_desa.id_desa=tb_klasifikasi_penduduk.kelurahan', 'inner');
        $query = $builder->get();
        return $query->getResult();
    }
}
