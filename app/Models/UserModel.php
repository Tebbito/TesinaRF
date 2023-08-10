<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password'];

    // Función para verificar las credenciales de login
    public function checkCredentials($username, $password)
    {
        $user = $this->where('username', $username)->first();

        if ($user && password_verify($password, $user['password'])) {
            return $user;
        }

        return null;
    }

    // Función para verificar si el username ya existe en la base de datos
    public function checkUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    // Función para verificar si el email ya existe en la base de datos
    public function checkEmail($email)
    {
        return $this->where('email', $email)->first();
    }
}
