<?php

namespace App\Controllers;

use App\Models\UserModel;

class LoginController extends BaseController
{
    public function auth()
    {
        $session = session();
        $userModel = new UserModel();

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $user = $userModel->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                // Salva os dados na sessão
                $session->set([
                    'id'     => $user['id'],
                    'nome'   => $user['nome'],   // aqui tem que bater com o nome da sua coluna
                    'email'  => $user['email'],
                    'logado' => true
                ]);

                return redirect()->to('/lista-usuario');
            } else {
                return redirect()->back()->with('erro', 'Senha incorreta');
            }
        } else {
            return redirect()->back()->with('erro', 'Usuário não encontrado');
        }
    }

    public function login()
    {
        return view('login');
    }
}
