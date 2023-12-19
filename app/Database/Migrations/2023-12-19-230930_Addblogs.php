<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Addblogs extends Migration
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
			'title' => [
				'type' => 'VARCHAR',
				'constraint' => 50,
				'null' => false
			],
			'author_name' => [
				'type' => 'VARCHAR',
				'constraint' => 150,
				'null' => false
			],
			'description' => [
				'type' => 'TEXT',
				'null' => true
			]
		]);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('blogs');
    }

    public function down()
    {
		$this->forge->dropTable('blogs');
    }
}
