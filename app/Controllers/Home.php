<?php

namespace App\Controllers;

use App\Models\UsuarioModel;

class Home extends BaseController
{
    public function login(): string
    {
        $usuarioModel = new UsuarioModel();

        $dados = [
            'lista-usuario' => $usuarioModel->paginate(10),
            'pager' => $usuarioModel->pager
    ];

        return view('lista-usuario', $dados);
    }
}