

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuários</title>
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
    #welcome {
      background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
      color: white;
      border: none;
      border-radius: 10px;
      font-weight: 600;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    h1 {
      color: #333;
      font-weight: 600;
      font-size: 1.8rem;
    }
    .bi-people-fill {
      color: #667eea;
      margin-right: 0.5rem;
    }
    .btn-success {
      background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
      border: none;
      border-radius: 10px;
      font-weight: 500;
      transition: background 0.3s ease, transform 0.2s ease;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .btn-success:hover {
      background: linear-gradient(135deg, #20c997 0%, #17a2b8 100%);
      transform: scale(1.05);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
    }
    .input-group-text {
      border: none;
      background-color: #f8f9fa;
      color: #6c757d;
      border-radius: 10px 0 0 10px;
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
    .table {
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    .table-dark th {
      background: linear-gradient(135deg, #343a40 0%, #495057 100%);
      border: none;
    }
    .table-hover tbody tr:hover {
      background-color: rgba(102, 126, 234, 0.1);
    }
    .btn-primary {
      background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
      border: none;
      border-radius: 8px;
      font-weight: 500;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .btn-primary:hover {
      background: linear-gradient(135deg, #0056b3 0%, #004085 100%);
      transform: scale(1.05);
    }
    .btn-danger {
      background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
      border: none;
      border-radius: 8px;
      font-weight: 500;
      transition: background 0.3s ease, transform 0.2s ease;
    }
    .btn-danger:hover {
      background: linear-gradient(135deg, #c82333 0%, #a02622 100%);
      transform: scale(1.05);
    }
    footer {
      color: rgba(255, 255, 255, 0.95);
      font-size: 0.85rem;
    }
  </style>
</head>
<body>
  <!-- Boas-vindas -->
  <div id="welcome" class="alert alert-success text-center fw-bold" style="animation: fadeOut 3s forwards;">
    Bem-vinda de volta, <?= session('nome') ?>!
  </div>

  <div class="d-flex justify-content-center align-items-center mt-4">
    <div class="card shadow-lg rounded-3" style="width: 90%; max-width: 1100px;">
      <div class="card-body">
        <!-- Título centralizado com ícone -->
        <h1 class="mb-3 text-center">
          <i class="bi bi-people-fill"></i>
          Lista de Usuários
        </h1>

        <!-- Botão e barra de pesquisa -->
        <div class="d-flex align-items-center justify-content-center mb-4 flex-wrap">
          <a href="/create" class="btn btn-success btn-sm me-2 mb-2">
            <i class="bi bi-person-plus-fill"></i> Novo Usuário
          </a>
          <div class="input-group" style="max-width: 350px;">
            <span class="input-group-text bg-white border-end-0">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492z"/>
              </svg>
            </span>
            <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Pesquisar por ID, nome ou e-mail...">
          </div>
        </div>

        <!-- Tabela -->
        <div class="table-responsive">
          <table id="userTable" class="table table-striped table-hover align-middle">
            <thead class="table-dark">
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
              <?php if (!empty($usuarios) && is_array($usuarios)): ?>
                <?php foreach ($usuarios as $row): ?>
                  <tr>
                    <td><?= esc($row['id']) ?></td>
                    <td><?= esc($row['nome']) ?></td>
                    <td><?= esc($row['email']) ?></td>
                    <td><?= esc($row['senha']) ?></td>
                    <td>
                      <a href="/edit/<?= $row['id'] ?>" class="btn btn-primary btn-sm">Editar</a>
                      <a href="/delete/<?= $row['id'] ?>" class="btn btn-danger btn-sm">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                          <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
                        </svg>
                      </a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="5" class="text-center">Nenhum usuário encontrado.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <!-- Paginação -->
        <?php if ($pager): ?>
          <div class="d-flex justify-content-center mt-3">
            <?= $pager->links('usuarios', 'bootstrap') ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <script>
    // Pega o campo de pesquisa pelo Id
    const searchInput = document.getElementById('searchInput');

    // Pega apenas o corpo da tabela (tbody) onde estão os dados
    const table = document.getElementById('userTable').getElementsByTagName('tbody')[0];

    // Evita que o enter recarregue a pagina
    searchInput.addEventListener('keydown', function(e) {
      if (e.key === "Enter") {
        e.preventDefault(); // evita submit ao pressionar Enter
      }
    });

    // Evento disparado toda vez que o usuario digita algo no campo
    searchInput.addEventListener('keyup', function() {
      // Converte o texto digitado para minusculas (para evitar erros ortograficos com letra minusculas e maiusculas)
      const filter = searchInput.value.toLowerCase();

      // Pega todas as linhas da tabela
      const rows = table.getElementsByTagName('tr');

      // Percorre todas as linhas da tabela
      for (let i = 0; i < rows.length; i++) {
        // Pega o conteudo de cada celula da linha
        const id = rows[i].cells[0].textContent.toLowerCase(); // coluna id
        const name = rows[i].cells[1].textContent.toLowerCase(); // coluna nome
        const email = rows[i].cells[2].textContent.toLowerCase(); // coluna email

        // Verifica se o texto digitado está contido em alguma das colunas
        if (id.includes(filter) || name.includes(filter) || email.includes(filter)) {
          rows[i].style.display = ''; // mostra a linha
        } else {
          rows[i].style.display = 'none'; // esconde a linha
        }
      }
    });
  </script>

  <footer class="text-center mt-4 mb-3">
    &copy; <?= date('Y') ?> Feito por Sarah Fróes
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
