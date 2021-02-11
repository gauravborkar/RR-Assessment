<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddData extends Migration
{
	public function up()
	{
		$this->forge->addField([
            'id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
			],
			'userId' => [
                'type' => 'INT',
                'constraint' => '5',
                'unsigned' => true,
            ],
            'title' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'null' => false
            ],
            'body' => [
                'type' => 'TEXT',
                'null' => false,
                'unique' => true
            ],
            'updated_at' => [
                'type' => 'datetime',
                'null' => true,
            ],
        'created_at datetime default current_timestamp',
        ]);
        $this->forge->addPrimaryKey('id');
        $this->forge->createTable('data');
	}

	public function down()
	{
		$this->forge->dropTable('data');
	}
}
