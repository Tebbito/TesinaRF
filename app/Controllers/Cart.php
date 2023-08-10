<?php

namespace App\Controllers;

use App\Models\CartModel;

class Cart extends BaseController
{
    private $cartModel;

    public function __construct()
    {
        $this->cartModel = new CartModel();
    }

    public function index()
    {
        // Obtener los productos del carrito de la base de datos
        // Utiliza el modelo CartModel para acceder a los datos
        $cartItems = $this->cartModel->findAll();
    
        // Pasar los datos a la vista
        $data['cartItems'] = $cartItems;
    
        return view('cart/index', $data);
    }

    public function addToCart($productId)
    {
        // Obtener el ID del usuario actual (puedes modificar esto según tu sistema de autenticación)
        $userId = 1;

        // Verificar si el producto ya está en el carrito
        $cartItem = $this->cartModel->where('user_id', $userId)->where('product_id', $productId)->first();

        if ($cartItem) {
            // Actualizar la cantidad del producto en el carrito
            $cartItem['quantity']++;
            $this->cartModel->save($cartItem);
        } else {
            // Agregar un nuevo producto al carrito
            $newCartItem = [
                'user_id' => $userId,
                'product_id' => $productId,
                'quantity' => 1
            ];
            $this->cartModel->insert($newCartItem);
        }

        // Redireccionar al carrito
        return redirect()->to('/cart');
    }

    public function removeFromCart($cartItemId)
    {
        // Eliminar un producto del carrito según su ID
        $this->cartModel->delete($cartItemId);

        // Redireccionar al carrito
        return redirect()->to('/cart');
    }

    public function clearCart()
    {
        // Vaciar el carrito eliminando todos los productos asociados al usuario
        // Obtener el ID del usuario actual (puedes modificar esto según tu sistema de autenticación)
        $userId = 1;
        $this->cartModel->where('user_id', $userId)->delete();

        // Redireccionar al carrito
        return redirect()->to('/cart');
    }
    public function viewCart()
    {   
        return redirect()->to('/cart');
    }

}
