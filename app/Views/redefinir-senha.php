<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Redefinir Senha</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts para tipografia elegante -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #e4e9ffff 0%, #f5f3f8ff 100%);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      margin: 0;
    }
    .top-bar {
      background: linear-gradient(135deg, #012f7a 0%, #004a99 100%);
      border-bottom: 2px solid #003d7a;
      transition: box-shadow 0.3s ease;
    }
    .top-bar:hover {
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    }
    .voltar {
      transition: transform 0.3s ease;
    }
    .voltar:hover {
      transform: scale(1.1);
    }
    .back-arrow {
      color: #fff;
      font-weight: bold;
    }
    .container {
      max-width: 450px;
      margin-top: 2rem;
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
    h2 {
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
    footer {
      color: rgba(255, 255, 255, 0.8);
      font-size: 0.85rem;
    }
  </style>
</head>
<body>
  <header class="top-bar d-flex align-items-center p-3 shadow-sm">
    <a href="<?= base_url('login') ?>" class="voltar me-3 text-decoration-none text-white d-flex align-items-center">
      <span class="back-arrow fs-2">&#x2039;</span>
    </a>
    <h1 class="m-0 fs-4 text-white">Voltar</h1>
  </header>

  <div class="container mt-5">
    <div class="card p-4 shadow-sm">
      <h2 class="mb-4 text-center">Redefinir Senha</h2>
      <?php if (session()->getFlashdata('erro')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('erro') ?></div>
      <?php endif; ?>
      <?php if (session()->getFlashdata('sucesso')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('sucesso') ?></div>
      <?php endif; ?>

      <form action="<?= base_url('redefinir-senha') ?>" method="post">
        <!-- Campo Email -->
        <div class="input-group mb-3">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zM.966 13.259l5.64-3.47L8 9.583l1.326.795 5.64 3.471A1 1 0 0 1 14 14H2a1 1 0 0 1-.966-.741z"/>
            </svg>
          </span>
          <input type="email" class="form-control" id="email" name="email" placeholder="E-mail cadastrado" required>
        </div>

        <!-- Campo Senha -->
        <div class="input-group mb-4">
          <span class="input-group-text">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-lock">
              <path fill-rule="evenodd" d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4M4.5 7A1.5 1.5 0 0 0 3 8.5v5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 11.5 7zM8 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3"/>
            </svg>
          </span>
          <input type="password" class="form-control" id="senha" name="senha" placeholder="Nova senha (6 caracteres)" required>
        </div>

        <!-- Botão Redefinir -->
        <button type="submit" class="btn w-100 text-white">Redefinir</button>
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
