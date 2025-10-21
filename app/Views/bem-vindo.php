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
                    
 <svg xmlns="http://www.w3.org/2000/svg" width="150" height="150" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
  <h3> Bem-vinda, <?= session('nome') ?>!</h3>
  <p class="text-muted">Escolha uma das opções abaixo:</p>
  <a href="/create" class="btn btn-success m-2"> Cadastrar Usuário</a>
  <a href="lista-usuario" class="btn btn-primary m-2"> Ver Lista</a>
  
<a href="<?= base_url('logout') ?>" class="btn btn-danger m-2">Sair</a>


 
</div>
</div>
   
</body>
</html>