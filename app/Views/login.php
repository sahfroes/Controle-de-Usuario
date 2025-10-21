<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>



<body>
  <div class="container mt-5" style="max-width: 420px;">
    <div class="card p-4 shadow-sm" style="background-color: #f7f7f7; border-radius: 15px;">
      <h3 class="text-center mb-4">Login</h3>

      <form action="<?= base_url('login') ?>" method="post">
        
        <!-- Campo Email -->

        <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" width="80" class="mb-3">
        <div class="input-group mb-3">
          <span class="input-group-text bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
              class="bi bi-envelope">
              <path
                d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 
                1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 
                2.383-4.708 2.825L15 11.105zM.966 
                13.259l5.64-3.47L8 9.583l1.326.795 
                5.64 3.471A1 1 0 0 1 14 
                14H2a1 1 0 0 1-.966-.741z" />
            </svg>
          </span>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>

        <!-- Campo Senha -->
        <div class="input-group mb-3">
          <span class="input-group-text bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor"
              class="bi bi-lock">
              <path fill-rule="evenodd"
                d="M8 0a4 4 0 0 1 4 
                4v2.05a2.5 2.5 0 0 1 2 
                2.45v5a2.5 2.5 0 0 1-2.5 
                2.5h-7A2.5 2.5 0 0 1 2 
                13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 
                4 0 0 1 4-4M4.5 7A1.5 1.5 0 0 0 
                3 8.5v5A1.5 1.5 0 0 0 4.5 
                15h7a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 
                1.5 0 0 0 11.5 7zM8 1a3 3 0 0 0-3 
                3v2h6V4a3 3 0 0 0-3-3" />
            </svg>
          </span>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
        </div>

        <!-- Botão Azul -->
        <button type="submit" class="btn w-100 text-white"
          style="background-color: #004a99; ">
          Entrar
        </button>

       

       
        <!-- Links extras -->
        <div class="text-center mt-3">
          <small>
            esqueceu a senha? <a href="<?= base_url('redefinir-senha') ?>">Recuperar Senha</a><br>
            Ainda não tem conta? <a href="<?= base_url('registro') ?>">Cadastre-se</a>
          </small>
        </div>



      </form>
    </div>







    <footer class="text-center mt-4 mb-3 text-muted small">
      &copy; <?= date('Y') ?> Feito por Sarah Fróes
    </footer>
  </div>
</body>








<style>

body {
  background: linear-gradient(135deg, #a92fdaff, #10b1ddff);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  font-family: 'Poppins', sans-serif;
}

.card {
  background: #fff;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  padding: 40px;
  max-width: 400px;
  width: 100%;
  text-align: center;
}

.card h2 {
  margin-bottom: 20px;
  color: #8a1abeff;
  font-weight: 600;
}

.btn-primary {
  background: #5c2481ff;
  border: none;
  border-radius: 50px;
  padding: 10px 20px;
  font-weight: 500;
}

.btn-primary:hover {
  background: #0056b3;
}

</style>



