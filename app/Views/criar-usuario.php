<!-- filepath: c:\xampp\htdocs\meu-formulario\app\Views\usuario\novo-usuario.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Novo Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5" style="max-width: 500px;">
        <h1>Criar Novo Usuário</h1>

        <form action="/store" method="post">

            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="senha" class="form-label">Senha </label>
                <input type="password" class="form-control" id="senha" name="senha" required  placeholder="(minimo 6 caracteres)">
                 <div id="avisoSenha" class="text-danger mt-1" style="display:none;">A senha deve ter pelo menos 6 caracteres.</div>
            </div>

            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="/lista-usuario" class="btn btn-danger">Cancelar</a>
        </form>


        <footer class="text-center mt-5 mb-3 text-muted small">
            &copy; <?= date('Y') ?> Feito por Sarah Fróes
        </footer>
    </div>
</body>
</html>