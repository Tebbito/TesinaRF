<?php namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class Auth extends Controller
{
    public function index()
    {
        // Mostrar el formulario de inicio de sesión
        echo view('login');
    }

    public function register()
    {
        // Mostrar el formulario de registro
        echo view('register');
    }

    public function create_user()
    {
        // Recuperar los datos del formulario de registro
        $name            = $this->request->getVar('name');
        $apellido        = $this->request->getVar('apellido');
        $nameusuario     = $this->request->getVar('nameusuario');
        $email           = $this->request->getVar('email');
        $password        = $this->request->getVar('password');

        // Validar los datos de registro
        $model = new UserModel();

        if ($model->where('email', $email)->countAllResults() > 0) {
            // El correo electrónico ya está en uso
            return redirect()->back()->with('error', 'El correo electrónico ya está registrado');
        }

        // Crear el nuevo usuario
        $password_hashed = password_hash($password, PASSWORD_DEFAULT);

        $data = [
            'name'        => $name,
            'apellido'    => $apellido,
            'nameusuario' => $nameusuario,
            'email'       => $email,
            'password'    => $password_hashed
        ];

        $model->insert($data);

        // Iniciar sesión
        $user = $model->where('email', $email)->first();

        $session = session();
        $session->set([
            'id'    => $user['id'],
            'email' => $user['email'],
            'logged_in' => TRUE
        ]);

        return redirect()->to('/');
    }

    public function login()
    {
        // Recuperar los datos del formulario de inicio de sesión
        $email    = $this->request->getVar('email');
        $password = $this->request->getVar('password');
    
        // Validar los datos de inicio de sesión
        $model = new UserModel();
        $user  = $model->where('email', $email)
                       ->first();
    
        if (!$user || !password_verify($password, $user['password'])) {
            // Los datos son inválidos
            return redirect()->back()->with('error', 'Correo o contraseña inválidos');
        }
    
        // Iniciar sesión
        $session = session();
        $session->set([
            'id'    => $user['id'],
            'email' => $user['email'],
            'logged_in' => TRUE
        ]);
    
        return redirect()->to('/');
    }

    public function logout()
    {
        // Cerrar sesión
        $session = session();
        $session->destroy();

        return redirect()->to('/');
    }
}