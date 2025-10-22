<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts para tipografia elegante -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #e4e9ffff 0%, #f5f3f8ff 100%);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .container {
      max-width: 450px;
    }
    .card {
      background-color: rgba(255, 255, 255, 0.95);
      border: none;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
    }
    h3 {
      color: #333;
      font-weight: 600;
      font-size: 1.8rem;
    }
    .input-group-text {
      border: none;
      background-color: #f8f9fa;
      color: #6c757d;
    }
    .form-control {
      border: none;
      border-radius: 0 10px 10px 0;
      box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
      transition: box-shadow 0.3s ease;
    }
    .form-control:focus {
      box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1), 0 0 0 3px rgba(102, 126, 234, 0.25);
    }
    .btn {
      background: linear-gradient(135deg, #004a99 0%, #007bff 100%);
      border: none;
      border-radius: 10px;
      font-weight: 500;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .btn:hover {
      background: linear-gradient(135deg, #003d7a 0%, #0056b3 100%);
      transform: scale(1.02);
    }
    .text-center small a {
      color: #667eea;
      text-decoration: none;
      font-weight: 500;
    }
    .text-center small a:hover {
      text-decoration: underline;
    }
    footer {
      color: rgba(255, 255, 255, 1);
      font-size: 0.85rem;
    }
  </style>
</head>
<body>
  <div class="container mt-5">
    <div class="card p-4 shadow-sm">
      <h3 class="text-center mb-4">Login</h3>

      <form action="<?= base_url('login') ?>" method="post">
        
        <!-- Ícone de usuário -->
        <div class="text-center mb-4">
          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" width="90" alt="Ícone de usuário" class="rounded-circle shadow-sm">
        </div>

        <!-- Campo Email -->
        <div class="input-group mb-3">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zM.966 13.259l5.64-3.47L8 9.583l1.326.795 5.64 3.471A1 1 0 0 1 14 14H2a1 1 0 0 1-.966-.741z"/>
            </svg>
          </span>
          <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
        </div>

        <!-- Campo Senha -->
        <div class="input-group mb-4">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-lock">
              <path fill-rule="evenodd" d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4M4.5 7A1.5 1.5 0 0 0 3 8.5v5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 11.5 7zM8 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3"/>
            </svg>
          </span>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required>
        </div>

        <!-- Botão Entrar -->
        <button type="submit" class="btn w-100 text-white mb-3">
          Entrar
        </button>

        <!-- Links extras -->
        <div class="text-center">
          <small>
            Esqueceu a senha? <a href="<?= base_url('redefinir-senha') ?>">Recuperar Senha</a><br>
            Ainda não tem conta? <a href="<?= base_url('registro') ?>">Cadastre-se</a>
          </small>
        </div>
      </form>
    </div>

    <footer class="text-center mt-4 mb-3">
      &copy; <?= date('Y') ?> Feito por Sarah Fróes
    </footer>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>