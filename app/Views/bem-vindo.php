<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bem-vindo</title>
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
      margin: 0;
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
    .card-body {
      padding: 2rem;
    }
    .bg-light {
      background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%) !important;
      border-radius: 15px;
      box-shadow: inset 0 2px 10px rgba(0, 0, 0, 0.1);
    }
    .bi-person-circle {
      color: #000000ff;
      filter: drop-shadow(0 4px 8px rgba(102, 126, 234, 0.3));
      transition: transform 0.3s ease;
    }
    .bi-person-circle:hover {
      transform: scale(1.05);
    }
    h3 {
      color: #333;
      font-weight: 600;
      margin-top: 1rem;
    }
    .text-muted {
      font-size: 1rem;
      color: #6c757d;
    }
    .btn {
      border-radius: 10px;
      font-weight: 500;
      transition: background 0.3s ease, transform 0.2s ease, box-shadow 0.3s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      margin: 0.5rem 0; /* Espaçamento vertical entre botões */
      width: 100%; /* Largura total para uniformidade */
      max-width: 250px; /* Largura máxima para não ficarem muito largos */
    }
    .btn:hover {
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }
    .btn-success {
      background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
      border: none;
    }
    .btn-success:hover {
      background: linear-gradient(135deg, #20c997 0%, #17a2b8 100%);
    }
    .btn-primary {
      background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
      border: none;
    }
    .btn-primary:hover {
      background: linear-gradient(135deg, #0056b3 0%, #004085 100%);
    }
    .btn-danger {
      background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
      border: none;
    }
    .btn-danger:hover {
      background: linear-gradient(135deg, #c82333 0%, #a02622 100%);
    }
    footer {
      position: absolute;
      bottom: 1rem;
      left: 50%;
      transform: translateX(-50%);
      color: rgba(255, 255, 255, 0.8);
      font-size: 0.85rem;
    }
  </style>
</head>
<body>
  <div class="d-flex justify-content-center align-items-center mt-4">
    <div class="card shadow-lg rounded-3" style="width: 90%; max-width: 1100px;">
      <div class="card-body">
        <!-- Ícone de usuário -->
        <div class="text-center mb-4">
          <img src="https://cdn-icons-png.flaticon.com/512/847/847969.png" width="90" alt="Ícone de usuário" class="rounded-circle shadow-sm">
        </div>
          <h3>Bem-vinda, <?= session('nome') ?>!</h3>
          <p class="text-muted">Escolha uma das opções abaixo:</p>
          <!-- Container Flexbox para empilhar botões verticalmente -->
          <div class="d-flex flex-column align-items-center">
            <a href="/create" class="btn btn-success">Cadastrar Usuário</a>
            <a href="lista-usuario" class="btn btn-primary">Ver Lista</a>
            <a href="<?= base_url('logout') ?>" class="btn btn-danger">Sair</a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer class="text-center">
    &copy; <?= date('Y') ?> Feito por Sarah Fróes
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
