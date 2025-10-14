<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        return view('login');
    }

    public function auth()
    {
        $session = session();
        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('senha');

        $user = $userModel->where('email', $email)->first();

        if ($user && password_verify($password, $user['senha'])) {
            // Salvar dados na sessão
            $session->set([
                'id'    => $user['id'],
                'name'  => $user['name'],
                'email' => $user['email'],
                'isLoggedIn' => true
            ]);

            // Redireciona para lista de usuários
            return redirect()->to(base_url('lista-usuario'));
        } else {
            $session->setFlashdata('mensagem', 'Email ou senha inválidos!');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
