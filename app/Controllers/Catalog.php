<?php


namespace App\Controllers;

use App\Models\ProductModel;

class Catalog extends BaseController
{
    public function index()
    {
        $consulta = new ProductModel;
        $resultado['producto'] = $consulta->recibir_productos();

        return view('index', $resultado);
    }
}

?>