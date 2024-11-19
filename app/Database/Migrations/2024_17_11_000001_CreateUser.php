<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUser extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'username'        => [
                'type'           => 'VARCHAR',
                'constraint'     => '20',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
            ],
            'password'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '30',
            ],
            'birth'       => [
                'type'           => 'DATE',
            ],
            'created_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at'  => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->createTable('users_2');
    }

    public function down()
    {
        $this->forge->dropTable('users_2');
    }
}

?>