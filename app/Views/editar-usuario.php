
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de usuário</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer"> 
</head>
<body>

<div class="container mt-5 d-flex justify-content-center" style="max-width: 500px;">
  <div class="w-100">
    <h1 class="text-center mb-4">Edição de usuário</h1>
    <form action="/update/<?= esc($usuario['id']) ?>" method="POST">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">

        <div class="mb-3">
          <label for="nome" class="form-label">Nome</label>
          <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" value="<?= isset($usuario['nome']) ? esc($usuario['nome']) : ''; ?>" required>
        </div>

        <div class="mb-3">
          <label for="email" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email" placeholder="usuario@gmail.com" value="<?= isset($usuario['email']) ? esc($usuario['email']) : ''; ?>" required>
        </div>

        <div class="mb-3">
          <label for="senha" class="form-label">Senha</label>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="(mínimo 6 caracteres)">
          <div id="avisoSenha" class="text-danger mt-1" style="display:none;">A senha deve ter pelo menos 6 caracteres.</div>
        </div>
        
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="/lista-usuario" class="btn btn-danger">Cancelar</a>
    </form>
    <footer class="text-center mt-5 mb-3 text-muted small">
      &copy; <?= date('Y') ?> Feito por Sarah Fróes
    </footer>
  </div>

</div>
    
</body>
</html>