<?php

namespace App\Controllers;

use PDO;

class Home extends BaseController
{
    public function index()
    {
        
        if (function_exists('mysqli_connect')) {
            echo "mysqli is installed";
        }else{
            echo " Enable Mysqli support in your PHP installation ";
            phpinfo();
        }


    }

    public function cerrarsesion()
    {
        return redirect()->to(base_url());
    }

    public function saludar($nombre, $titulo, $color)
    {
        $data = [
            'nombre' => $nombre,
            'titulo' => $titulo,
            'color' => $color
        ];
        return view('saludar', $data);
    }

    public function login()
    {
        session_start();
        $_SESSION['nombre'] = 'Juan';
        return redirect()->back();
    }

    public function sorteos()
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

        echo json_encode($data);
    }
}
