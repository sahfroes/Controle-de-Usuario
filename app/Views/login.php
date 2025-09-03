<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>

<body>
    
<div class="wrapper">
    <form action="<?= base_url('login') ?>" method="post">
        <h1>Login</h1>
        <div class="input-box">
          <input type="email" name="email" placeholder="E-mail" required>
          
          <i class="bi bi-person-fill"></i>
        </div>

        <div class="input-box">
            <input type="password" name="senha" placeholder=" Digite a senha (com 6 caracteres)" required>
            <i class="bi bi-person-fill"></i>
        </div>

        <div class="remember-forgot">
            <label ><input type="checkbox"> lembre de mim </label>
            <a href="#"> Esqueceu da sua conta?</a>
        </div>

        <button type="submit" class="botao">Login</button>
        <div class="registrar">
            <p> Não tem uma conta? <a href="<?= base_url('registro') ?>">Registrar</a></p>
    </form>
</div>

</body>


</html>