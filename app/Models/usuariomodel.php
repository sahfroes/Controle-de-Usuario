<?php
/*
class Tabela{

    public $id;
    public $nome;
    public $email;
    public $senha;

    public function __construct($id= null, $nome = null, $email = null, $senha = null) {
     $this->id = $id;
      $this->nome = $nome;
      $this->email = $email;
      $this->senha = $senha;
    }
    
   public function salvar (){
    $pdo = new \PDO();
    $stmt = $pdo->prepare("INSERT INTO tabela (nome, email, senha) VALUES (null, null, null)");
        $stmt->execute([$this->nome, $this->email, $this->senha]);
   }
}*/









//o namespace ajuda a localizar a classe
namespace App\Models;

//é a classe base(pesquisar se a pasta q criei é uma model ou posso inventar um nome)
use CodeIgniter\Model;

//cria a model usuariomodel, e esta herdando td q a classe Model sabe fazer 
class UsuarioModel extends Model{

  //aqui está informando que a model vai trabalhar com a tabela usurios do meu banco de dados
  protected $table = 'Usuario';

  //é a chamve primaria da tabela, usada por métodos como find($id) e update($id, $data)
  protected $primaryKey = 'id';

  protected $allowedFields = [ //define quais campos podem ser preenchidos via insert/update
    'nome',
    'email',
    'senha'
  ];

  //REgras de validação para os campos da tabela usuario
  protected $validationRules = [ 
  'nome' => 'required|min_length[3]|max_length[255]',
  'email' => 'required|valid_email|is_unique[usuario.email]',
  'senha' => 'required|min_length[6]',
   ];


   protected $validationMessages = [        // mensagens de erro personalizadas
    'email' => [
         'is_unique' => 'Esse email já esá cadastrado'
    ] 
  ];

  protected $userTimestamps = true;          // timestamps para criação e atualização automáticas
  protected $createField = 'create_at';
  protected $updateField = 'update_at';

}


