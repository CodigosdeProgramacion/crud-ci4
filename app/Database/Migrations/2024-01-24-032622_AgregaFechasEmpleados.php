<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AgregaFechasEmpleados extends Migration
{
    public function up()
    {
        $this->forge->addColumn('empleados', [
            'created_at' => [
                'type' => 'DATETIME',
                'after' => 'id_departamento'
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'after' => 'created_at'
            ],
        ]);
    }

    public function down()
    {
        $this->forge->dropColumn('empleados', 'updated_at');
        $this->forge->dropColumn('empleados', 'created_at');
    }
}
