<?php

namespace App\Controllers;

use App\Models\ProductoModel;

class Producto extends BaseController
{
    private ProductoModel $productoModel;


    public function __construct()
    {
        $this->productoModel = new ProductoModel();
    }

    public function index()
    {
        $productos = $this->productoModel->findAll();
        // echo "<pre>";print_r($productos);echo "</pre>";
        $data = [
            'productos' => $productos
        ];
        return view('/productos/index', $data);
    }

    public function show($id)
    {
        $productoModel = new ProductoModel();
        $producto = $productoModel->find($id);

        print_r($producto);
    }

    public function delete($id)
    {
        $this->productoModel->delete($id);
        return redirect()->to(base_url() . '/producto');
    }

}
