<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    // protected $DBGroup = 'alternate_db_group';
    public function up()
    {
        // Membuat kolom/field untuk tabel
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'kon_id'       => [
                'type'           => 'INT',
                'constraint'     => 5,
                'null'           => true,
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255'
            ],
            'username'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'password'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'ip_address'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'token'      => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'null'           => true,
            ],
            'avatar' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
                'default'        => 'default.jpg',
            ],
            '`last_login` datetime NOT NULL DEFAULT current_timestamp()',
            'level' => [
                'type'           => 'ENUM',
                'constraint'     => ['superadmin', 'admin', 'petugas', 'verifikator'],
                'default'        => 'petugas',
            ],
            '`created_at` datetime NOT NULL DEFAULT current_timestamp()',
            '`update_at` datetime NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP'
        ]);
        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel
        $this->forge->createTable('users', TRUE);
    }

    public function down()
    {
        // menghapus tabel
        // $this->forge->dropTable('users');
    }
}
