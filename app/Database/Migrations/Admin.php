<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'phone' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => true,
            ],
            'user_type' => [
                'type' => 'ENUM("admin","user")',
                'constraint' => '100',
                'default' => 'user',
                'null' => true,
                
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('admin');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
