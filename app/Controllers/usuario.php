<?php

namespace App\Controllers; //usado para organizar o prjeto. Como está dentro da pasta app/Controllers, o namespace é App/Controllers

use CodeIgniter\Controller;
use App\Models\UsuarioModel; //aqui importa o usuariomodel para usalo dentro do controller. Ele é quem lida com o banco  

class Usuario extends Controller{    //define a controller usuario e herda de basecontroller que ja vem com recursos úteis como $this->request(ex:pegar dados de furmulario)
    public function index() //o método index serve para listar todos os usuários cadastrador
    {
        $model = new UsuarioModel(); //instancia a model
        $data['usuario'] = $model->findAll() ; // o array $data carrega os dados para a view usuarios/index,php (pega todos os usuarios) e o findAll() retorna todos os dados da tabela
           
        return view('index' , $data); // passa dos dados para a view
    }

    public function listaUsuario()
{
    $model = new UsuarioModel();
   
  $usuarioModel = new UsuarioModel();

        // Pega 5 usuários por página
        $data['usuarios'] = $usuarioModel->paginate(5, 'usuarios' );

        // Objeto de paginação
        $data['pager'] = $usuarioModel->pager;

         $data['nome'] = session()->get('nome');

        // Retorna a view correta
        return view('lista-usuario', $data);

}

    public function criarUsuario(){ // metodo para exibir o formulário de criação 
        $model = new UsuarioModel();
      return view('criar-usuario'); //Só carrega a view com o formulário

    }

    public function store( ){  //método para salvar os dados no banco (POST)

        $model = new UsuarioModel();

        $dados = [ //recebe os dados do formulário
            'nome' =>$this->request->getPost('nome'),
            'email'=>$this->request->getPost('email'),
            'senha' => $this->request->getPost('senha'), 
            
        ];

        if ($model->save($dados)) {
            return redirect()->to('/lista-usuario'); // Redireciona para a lista de usuários
        } else {
            // Caso ocorra um erro, exibe uma mensagem
            return redirect()->back()->with('erro', 'Erro ao salvar o usuário. Verifique os dados e tente novamente.');
        }
    }

    
    public function edit($id){//método para exibir o formulário de edição

        $model = new UsuarioModel();
        $data['usuario'] = $model->find($id); //busca o usuário pelo id

        if (!$data['usuario']) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Usuário com ID $id não encontrado.");
        }
    
        return view('/editar-usuario', $data); // Carrega a view 'edit.php' dentro do diretório 'usuario'


    } 





public function update($id)
{
    $model = new UsuarioModel();

    // Obtém os dados atuais do banco
    $usuarioAtual = $model->find($id);

    if (!$usuarioAtual) {
        throw new \CodeIgniter\Exceptions\PageNotFoundException("Usuário com ID $id não encontrado.");
    }

    // Pega os novos dados
    $nome  = $this->request->getPost('nome');
    $email = $this->request->getPost('email');
    $senha = $this->request->getPost('senha');

    // Prepara o array de dados
    $dados = [];

    if (!empty($nome) && $nome !== $usuarioAtual['nome']) {
        $dados['nome'] = $nome;
    }

    if (!empty($email) && $email !== $usuarioAtual['email']) {
        $dados['email'] = $email;
    }

    if (!empty($senha) && $senha !== $usuarioAtual['senha']) {
        $dados['senha'] = $email;
       
    }

    // Só tenta atualizar se houver algo para atualizar
    if (!empty($dados)) {
        $model->update($id, $dados);
        return redirect()->to('/lista-usuario')->with('sucesso', 'Usuário atualizado com sucesso.');
    } else {
        // Nenhuma alteração foi feita (inclusive senha vazia)
        return redirect()->back()->with('info', 'Nenhuma alteração foi feita.');
    }
}

    public function delete($id){ //método para deletar um usuário
        $model = new UsuarioModel();

        if (!$model->find($id)) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException("Usuário com ID $id não encontrado.");
        }

        $model->delete($id); //deletar o usuário

        return redirect()->to('/lista-usuario'); //redireciona
    }

public function login()
{
    return view('login');
}


public function autenticar()
{
    $email = $this->request->getPost('email');
    $senha = $this->request->getPost('senha');
    $model = new UsuarioModel();
    $usuario = $model->where('email', $email)->first();

   if ($usuario && $senha === $usuario['senha']) {
        session()->set([
    'usuario_id' => $usuario['id'],
    'nome'       => $usuario['nome'],
    'email'      => $usuario['email'],
    'logado'     => true
]);

        return redirect()->to('/bem-vindo');
    } else {
        return redirect()->back()->with('erro', 'E-mail ou senha inválidos.');
    }
}

public function registro()
{
    return view('registro');
}

public function registrar()
{
    $model = new UsuarioModel();
    $dados = [
        'nome'  => $this->request->getPost('nome'),
        'email' => $this->request->getPost('email'),
        'senha' => $this->request->getPost('senha'),
    ];

    // Verifica se o e-mail já existe
    if ($model->where('email', $dados['email'])->first()) {
        return redirect()->back()->with('erro', 'E-mail já cadastrado!');
    }

    if ($model->save($dados)) {
        return redirect()->to('/login')->with('sucesso', 'Usuário registrado com sucesso! Faça login.');
    } else {
        return redirect()->back()->with('erro', 'Erro ao registrar. Tente novamente.');
    }
}


public function redefinirSenha()
{
    return view('redefinir-senha');
}

public function processaRedefinirSenha()
{
    $email = $this->request->getPost('email');
    $novaSenha = $this->request->getPost('senha');
    $model = new UsuarioModel();
    $usuario = $model->where('email', $email)->first();

    if ($usuario) {
        $model->update($usuario['id'], ['senha' => $novaSenha]);
        return redirect()->to('/login')->with('sucesso', 'Senha redefinida com sucesso!');
    } else {
        return redirect()->back()->with('erro', 'E-mail não encontrado.');
    }
}


public function lista()
{
    $userModel = new App\Models\UserModel();

    // Pagina mostrando 5 usuários por página
    $data['usuarios'] = $userModel->paginate(5, 'usuarios' );

    // Objeto de paginação
    $data['pager'] = $userModel->pager;

    // Aqui você chama a view "lista-usuario.php"
    return view('lista-usuario', $data);
}



public function bemVindo() //o método index serve para listar todos os usuários cadastrador
    {
        $model = new UsuarioModel(); //instancia a model
        $data['usuario'] = $model->findAll() ; // o array $data carrega os dados para a view usuarios/index,php (pega todos os usuarios) e o findAll() retorna todos os dados da tabela
           
        return view('bem-vindo' , $data); // passa dos dados para a view
    }




    public function logout()
{
    session()->destroy();
    return redirect()->to(base_url('/')); // volta para a tela de login (rota '/')
}


}