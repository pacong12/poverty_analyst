<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Admin extends Seeder
{
    public function run()
    {
        //
        $data = [
            'username' => 'admin',
            'password' => password_hash('admin', PASSWORD_DEFAULT),
            'nama_lengkap' => 'admin',
            'email' => 'admin@gmail.com'
        ];
        $this->db->table('admin')->insert($data);
    }
}
