<?php

namespace App\Controllers;
;

use App\Models\UsuarioModel;
use ReflectionException;

class Usuario extends BaseController
{
    private UsuarioModel $usuarioModel;

    public function __construct()
    {
        $this->usuarioModel = new UsuarioModel();
    }

    public function index(): string
    {
        $usuarios = $this->usuarioModel->findAll();
        $data = [
            'usuarios' => $usuarios
        ];
        return view('/usuarios/index', $data);
    }

    public function create(): string
    {
        return view('/usuarios/create');
    }

    /**
     * @throws ReflectionException
     */
    public function store(): \CodeIgniter\HTTP\RedirectResponse
    {
        $usuario = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'telefono' => $this->request->getPost('telefono'),
            'contrasena' => $this->request->getPost('contrasena'),
            'correo' => $this->request->getPost('correo'),
            'estado' => $this->request->getPost('estado'),
            'ciudad' => $this->request->getPost('ciudad'),
            'direccion' => $this->request->getPost('direccion'),
        ];
        $this->usuarioModel->insert($usuario);
        return redirect()->to(base_url() . '/usuario?m=usuario $usuario[nombre], creado correctamente! ');
    }

    public function edit($id): string
    {
        $usuario = $this->usuarioModel->find($id);
        $data = [
            'usuario' => $usuario
        ];
        return view('/usuarios/edit', $data);
    }

    /**
     * @throws ReflectionException
     */
    public function update($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $usuario = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'telefono' => $this->request->getPost('telefono'),
            'contrasena' => $this->request->getPost('contrasena'),
            'correo' => $this->request->getPost('correo'),
            'estado' => $this->request->getPost('estado'),
            'ciudad' => $this->request->getPost('ciudad'),
            'direccion' => $this->request->getPost('direccion'),
        ];
        $this->usuarioModel->update($id, $usuario);
        return redirect()->to(base_url() . '/usuario?m=usuario $usuario[nombre], actualizado correctamente! ', 200, 'success');
    }

    public function show($id): string
    {
        $usuario = $this->usuarioModel->find($id);
        $data = [
            'usuario' => $usuario
        ];
        return view('/usuarios/show', $data);

    }

    public function delete($id): \CodeIgniter\HTTP\RedirectResponse
    {
        $this->usuarioModel->delete($id);
        return redirect()->to(base_url() . '/usuario');
    }
}