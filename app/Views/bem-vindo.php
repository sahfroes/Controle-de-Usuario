<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Bem-vindo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    
 <form action="<?= base_url('bem-vindo') ?>" method="post"></form>

<div class="d-flex justify-content-center align-items-center mt-4">
    <div class="card shadow-lg rounded-3" style="width: 90%; max-width: 1100px;">
        <div class="card-body">
                <div class="text-center p-4 bg-light rounded shadow-sm mb-4">
  <h3> Bem-vinda, <?= session('nome') ?>!</h3>
  <p class="text-muted">Escolha uma das opções abaixo:</p>
  <a href="/create" class="btn btn-success m-2"> Cadastrar Usuário</a>
  <a href="lista-usuario" class="btn btn-primary m-2"> Ver Lista</a>
  
<a href="<?= base_url('logout') ?>" class="btn btn-danger m-2">Sair</a>


 
</div>
</div>
   
</body>
</html>