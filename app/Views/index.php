<!--http://localhost/meu-formulario/public/--->

<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<body>
    <div class="container" style="max-width: 600px; margin-top: 60px;">

        <h1 class="text-center mb-4">Sistema de Usuários</h1>

        <p class="text-center">Bem-vindo ao Sistema de Gerenciamento de Usuários.<br>
        Aqui você pode criar, editar e excluir usuários.</p>

        <div class="text-center my-4">
            <img src="https://media.tenor.com/P5EJALTMklMAAAAj/cinnamoroll.gif" alt="Bem-vindo" style="max-width: 250px;">
        </div>
<!--teste para o bem vindo com login, assim que entrar no login ir direto para o bem vindo 
        <div class="d-flex justify-content-center align-items-center mb-4">
            <span class="me-2">Para começar, clique no botão:</span>
            <a href="<?= base_url('bem-vindo') ?>" class="btn btn-primary">Entrar</a>
        </div>
-->
        <div class="d-flex justify-content-center align-items-center mb-4">
            <span class="me-2">Para começar, clique no botão:</span>
            <a href="<?= base_url('lista-usuario') ?>" class="btn btn-primary">Lista</a>
        </div>

         <div class="d-flex justify-content-center align-items-center mb-4">
            <span class="me-2">Acesse tambem pelo login:</span>
            <a href="<?= base_url('login') ?>" class="btn btn-primary">Login</a>
        </div>

<div class="d-flex justify-content-center align-items-center mb-4">
            <span class="me-2">Para começar, clique no botão:</span>
            <a href="<?= base_url('login') ?>" class="btn btn-primary">Usuário</a>
        </div>

        <footer class="text-center mt-5 mb-3 text-muted small">
            &copy; <?= date('Y') ?> Feito pos Sarah Fróes
        </footer>
    </div>


</body>
</html>