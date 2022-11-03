<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductoModel extends Model
{
    protected $table = 'productos';
    protected $primaryKey = 'id';
    protected $allowedFields = ['nombre', 'imagen', 'marca', 'precio', 'codigo'];

    public function findByFields($marca){
$productos = $this-> asArray()->where(['marca'=>$marca])->all();
    }
}

