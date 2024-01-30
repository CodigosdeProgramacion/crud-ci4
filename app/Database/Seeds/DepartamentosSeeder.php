<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DepartamentosSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nombre' => 'Almacen',
                'descripcion' => 'Descripción de almacen'
            ],
            [
                'nombre' => 'Contabilidad',
                'descripcion' => ''
            ],
            [
                'nombre' => 'Finanzas',
                'descripcion' => ''
            ],
            [
                'nombre' => 'Recursos Humanos',
                'descripcion' => ''
            ],
            [
                'nombre' => 'Sistemas',
                'descripcion' => ''
            ],
        ];
        $this->db->table('departamentos')->insertBatch($data);
    }
}
