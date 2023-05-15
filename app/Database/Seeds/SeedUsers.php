<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedUsers extends Seeder
{
    public function run()
    {
        $table = "users";
        $data = [
            [
                'kon_id' => 0,
                'name' => "Superadmin",
                'username' => 'admin123',
                'password' => md5('admin123'),
                'level' => 'superadmin',
            ]
        ];
        // $this->db->table($table)->truncate();
        foreach ($data as $d) {
            $this->db->table($table)->insert($d);
        }
    }
}
