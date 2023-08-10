<?php

namespace App\Models;

use CodeIgniter\Model;

class Detalle_producto_modelo extends Model
{
    protected $table      = 'products';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';

    protected $allowedFields = ['name', 'description', 'price', 'image'];
}