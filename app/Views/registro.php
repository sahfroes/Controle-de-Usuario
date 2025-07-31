
<!-- filepath: c:\xampp\htdocs\meu-formulario\app\Views\registro.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
</head>
<body>
<div class="wrapper">
    <form action="<?= base_url('registrar') ?>" method="post">
        <h1>Registrar</h1>
        <div class="input-box">
            <input type="text" name="nome" placeholder="Nome completo" required>
        </div>
        <div class="input-box">
            <input type="email" name="email" placeholder="E-mail" required>
        </div>
        <div class="input-box">
            <input type="password" name="senha" placeholder="Senha (mínimo 6 caracteres)" required minlength="6">
        </div>
        <button type="submit" class="btn">Registrar</button>
        <div class="register">
            <p>Já tem uma conta? <a href="<?= base_url('login') ?>">Login</a></p>
        </div>
    </form>
</div>
</body>
</html>