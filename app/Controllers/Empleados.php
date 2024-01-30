<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\DepartamentosModel;
use App\Models\EmpleadosModel;

class Empleados extends BaseController
{
    protected $helpers = ['form'];

    public function index()
    {
        $empleadosModel = new EmpleadosModel();
        $data['empleados'] = $empleadosModel->empleadosDepartamento();

        return view('empleados/index', $data);
    }

    public function new()
    {
        $departamentosModel = new DepartamentosModel();
        $data['departamentos'] = $departamentosModel->findAll();

        return view('empleados/nuevo', $data);
    }

    public function create()
    {
        $reglas = [
            'clave'            => 'required|min_length[5]|max_length[10]|is_unique[empleados.clave]',
            'nombre'           => 'required',
            'fecha_nacimiento' => 'required',
            'telefono'         => 'required',
            'departamento'     => 'required|is_not_unique[departamentos.id]'
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $post = $this->request->getPost(['clave', 'nombre', 'fecha_nacimiento', 'telefono', 'email', 'departamento']);

        $empleadosModel = new EmpleadosModel();
        $empleadosModel->insert([
            'clave'            => trim($post['clave']),
            'nombre'           => trim($post['nombre']),
            'fecha_nacimiento' => $post['fecha_nacimiento'],
            'telefono'         => $post['telefono'],
            'email'            => $post['email'],
            'id_departamento'  => $post['departamento'],
        ]);

        return redirect()->to('empleados');
    }

    public function edit($id = null)
    {
        if ($id == null) {
            return redirect()->route('empleados');
        }

        $empleadosModel = new EmpleadosModel();
        $departamentosModel = new DepartamentosModel();

        $data['departamentos'] = $departamentosModel->findAll();
        $data['empleado'] = $empleadosModel->find($id);

        return view('empleados/editar', $data);
    }

    public function update($id = null)
    {
        if (!$this->request->is('put') || $id == null) {
            return redirect()->route('empleados');
        }

        $reglas = [
            'clave'            => "required|min_length[5]|max_length[10]|is_unique[empleados.clave,id,{$id}]",
            'nombre'           => 'required',
            'fecha_nacimiento' => 'required',
            'telefono'         => 'required',
            'departamento'     => 'required|is_not_unique[departamentos.id]'
        ];

        if (!$this->validate($reglas)) {
            return redirect()->back()->withInput()->with('error', $this->validator->listErrors());
        }

        $post = $this->request->getPost(['clave', 'nombre', 'fecha_nacimiento', 'telefono', 'email', 'departamento']);

        $empleadosModel = new EmpleadosModel();
        $empleadosModel->update($id, [
            'clave'            => trim($post['clave']),
            'nombre'           => trim($post['nombre']),
            'fecha_nacimiento' => $post['fecha_nacimiento'],
            'telefono'         => $post['telefono'],
            'email'            => $post['email'],
            'id_departamento'  => $post['departamento'],
        ]);

        return redirect()->to('empleados');
    }

    public function delete($id = null)
    {
        if (!$this->request->is('delete') || $id == null) {
            return redirect()->route('empleados');
        }

        $empleadosModel = new EmpleadosModel();
        $empleadosModel->delete($id);

        return redirect()->to('empleados');
    }
}
