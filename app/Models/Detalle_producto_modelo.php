<?php

namespace App\Models;

use CodeIgniter\Model;

class Detalle_producto_modelo extends Model
{
    protected $table = 'products';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType = 'array';

    protected $allowedFields = ['name', 'description', 'Descripcion 2', 'Descripcion 3', 'Descripcion 4', 'Descripcion 5', 'Descripcion 6', 'Descripcion 7', 'Descripcion 8', 'Descripcion 9', 'Descripcion 10', 'Descripcion 11', 'price', 'image'];
}