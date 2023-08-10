<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductModel extends Model{
    protected $table = 'products';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'description', 'price', 'image'];

    public function recibir_productos(){
        $sql = $this->db->query("SELECT * FROM products");
        $productos = $sql->getResultArray();
        return $productos;
    }
}



?>