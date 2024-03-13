<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateAdminsTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            "id" => [
                "type" => "INT",
                "constraint" => 11,
                "auto_increment" => True,
                "unsigned" => true,
            ],
            "name" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false,
            ],
            "email" => [
                "type" => "VARCHAR",
                "constraint" => 50,
                "null" => false,
            ],
            "created_at datetime default current_timestamp"
        ]);

        $this->forge->addPrimaryKey('id');

        $this->forge->createTable('admis');
    }

    public function down()
    {
        //
    }
}
