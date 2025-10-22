<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Google Fonts para tipografia elegante -->
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(135deg, #a8c0ff 0%, #f5c7f7 100%);
      font-family: 'Poppins', sans-serif;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0;
    }
    .container {
      background-color: rgba(255, 255, 255, 0.98);
      border-radius: 25px;
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
      padding: 2.5rem;
      animation: fadeIn 1s ease-in-out;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .container:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 50px rgba(0, 0, 0, 0.25);
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(20px); }
      to { opacity: 1; transform: translateY(0); }
    }
    h1 {
      color: #4a4a4a;
      font-weight: 700;
      font-size: 2.2rem;
      margin-bottom: 0.5rem;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    h1 .bi {
      margin-right: 0.5rem;
      color: #667eea;
    }
    p {
      color: #6c757d;
      font-size: 1.15rem;
      line-height: 1.7;
      margin-bottom: 1.5rem;
    }
    img {
      border-radius: 20px;
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
      transition: transform 0.3s ease, filter 0.3s ease;
      filter: brightness(1);
    }
    img:hover {
      transform: scale(1.08);
      filter: brightness(1.1) drop-shadow(0 8px 16px rgba(102, 126, 234, 0.3));
    }
    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      border: none;
      border-radius: 12px;
      font-weight: 600;
      padding: 0.8rem 2rem;
      transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
      box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
      animation: pulse 2s infinite;
    }
    .btn-primary:hover {
      background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
      transform: scale(1.08);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.25);
    }
    @keyframes pulse {
      0% { box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15); }
      50% { box-shadow: 0 8px 16px rgba(102, 126, 234, 0.4); }
      100% { box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15); }
    }
    footer {
     color: rgba(255, 255, 255, 1);
      font-size: 0.9rem;
      margin-top: 2.5rem;
      font-weight: 500;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="text-center mb-4">
      <i class="bi bi-people-fill"></i>
      Sistema de Usuários
    </h1>

    <p class="text-center">Bem-vindo ao Sistema de Gerenciamento de Usuários.<br>
    Aqui você pode criar, editar e excluir usuários de forma simples e intuitiva.</p>

    <div class="text-center my-4">
      <img src="https://media.tenor.com/P5EJALTMklMAAAAj/cinnamoroll.gif" alt="Bem-vindo" style="max-width: 280px;">
    </div>

    <div class="d-flex justify-content-center align-items-center mb-4">
      <span class="me-2 fw-bold">Para começar, clique no botão:</span>
      <a href="<?= base_url('login') ?>" class="btn btn-primary">
        <i class="bi bi-box-arrow-in-right me-1"></i>Usuário
      </a>
    </div>

    <footer class="text-center">
      &copy; <?= date('Y') ?> Feito por Sarah Fróes
    </footer>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
