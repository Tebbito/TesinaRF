<?php
namespace App\Controllers;

use App\Models\Detalle_producto_modelo;

class Detalle_producto_controller extends \CodeIgniter\Controller
{
    public function CargarPagina($id)
    {
        $productModel = new Detalle_producto_modelo;

        $datos['result'] = $productModel->find($id);

        return view('detalle_producto_view', $datos);
    }
}
?>