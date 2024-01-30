<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Empleados extends Migration
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
            'clave' => [
                'type' => 'VARCHAR',
                'constraint' => 10,
                'unique' => true
            ],
            'nombre' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
            ],
            'fecha_nacimiento' => [
                'type' => 'DATE'
            ],
            'telefono' => [
                'type' => 'VARCHAR',
                'constraint' => 20,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 50,
                'null' => true
            ],
            'id_departamento' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
        ]);

        $this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_departamento', 'departamentos', 'id');
        $this->forge->createTable('empleados');
    }

    public function down()
    {
        $this->forge->dropTable('empleados');
    }
}
