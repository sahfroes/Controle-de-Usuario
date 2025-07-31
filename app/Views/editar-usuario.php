
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de usuário</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer"> 
</head>
<body>

<div class="container">
  <h1>Edição de usuário</h1>

  <!-- Formulário corrigido -->
  <form action="/update/<?= esc($usuario['id']) ?>" method="POST">
      <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

      <div class="form-group row mb-2">
        <label for="nome" class="col-sm-2 col-form-label">Nome</label>
        <div class="col-sm-5">
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" value="<?= isset($usuario['nome']) ? esc($usuario['nome']) : ''; ?>" required>
        </div>
      </div>

      <div class="form-group row mb-2">
        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
        <div class="col-sm-5">
          <input type="email" class="form-control" id="email" name="email" placeholder="usuario@gmail.com" value="<?= isset($usuario['email']) ? esc($usuario['email']) : ''; ?>" required>
        </div>
      </div>

      <div class="form-group row mb-2">
        <label for="senha" class="col-sm-2 col-form-label">Senha</label>
        <div class="col-sm-5">
          <input type="password" class="form-control" id="senha" name="senha" placeholder="(minimo 6 caracteres)" >
        </div>
      </div>
      
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="/lista-usuario" class="btn btn-danger" >Cancelar </a>
  </form>

   <footer class="text-center mt-5 mb-3 text-muted">
            &copy; <?= date('Y') ?> Feito por Sarah Fróes
   </footer>
</div>
    
</body>
</html>