<?php

namespace App\Controllers;

use JsonException;
use PDO;

class Home extends BaseController
{
    public function index()
    {
        return view('/admin/plantillas/general');
    }

    public function cerrarsesion(): \CodeIgniter\HTTP\RedirectResponse
    {
        return redirect()->to(base_url());
    }

    public function saludar($nombre, $titulo, $color): string
    {
        $data = [
            'nombre' => $nombre,
            'titulo' => $titulo,
            'color' => $color
        ];
        return view('saludar', $data);
    }

    public function login(): \CodeIgniter\HTTP\RedirectResponse
    {
        session_start();
        $_SESSION['nombre'] = 'Juan';
        return redirect()->back();
    }

    /**
     * @throws JsonException
     */
    public function sorteos(): void
    {
        $sorteos = [];
        $sorteos[] = [
            'titulo' => 'Sorteo 1',
            'precio' => '2020-01-01',
            'fecha' => 'Juan'
        ];
        $data = [
            'sorteos' => $sorteos
        ];

        echo json_encode($data, JSON_THROW_ON_ERROR);
    }
}
