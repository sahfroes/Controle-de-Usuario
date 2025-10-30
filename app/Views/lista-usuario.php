<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Usuários</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    body {
        background: linear-gradient(135deg, #e4e9ffff 0%, #f5f3f8ff 100%);
        font-family: 'Poppins', sans-serif;
        min-height: 100vh;
        margin: 0;
    }
    /* Estilo da nova barra de navegação/header */
    .navbar-welcome {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        font-weight: 600;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 0.75rem 1.5rem;
    }
    .navbar-welcome .navbar-brand {
        color: white;
    }
    .navbar-welcome .btn-outline-light {
        --bs-btn-hover-bg: #ffffff;
        --bs-btn-hover-color: #20c997;
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
        color: #555; /* Alterado para melhor contraste com fundo claro */
        font-size: 0.85rem;
    }
    /* Classe para alinhar ações */
    .actions-cell {
        min-width: 100px;
        text-align: center;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-welcome mb-4">
    <div class="container-fluid">
      <span class="navbar-brand mb-0 h1">
        <i class="bi bi-person-check-fill"></i>
        Bem-vinda de volta, <?= session('nome') ?>!
      </span>
      <a href="/logout" class="btn btn-outline-light btn-sm">
        <i class="bi bi-box-arrow-right"></i> Sair
      </a>
    </div>
  </nav>

  <div class="d-flex justify-content-center align-items-center mt-4">
    <div class="card shadow-lg rounded-3" style="width: 90%; max-width: 1100px;">
      <div class="card-body">
        
        <div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-2">
          <h1 class="mb-0">
            <i class="bi bi-people-fill"></i>
            Lista de Usuários
          </h1>
          <a href="/create" class="btn btn-success">
            <i class="bi bi-person-plus-fill"></i> Novo Usuário
          </a>
        </div>

        <div class="mb-4">
          <div class="input-group" style="max-width: 450px;">
            <span class="input-group-text">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" id="searchInput" class="form-control" placeholder="Pesquisar por ID, nome, e-mail, permissão...">
          </div>
        </div>

        <div class="table-responsive">
          <table id="userTable" class="table table-striped table-hover align-middle">
            <thead class="table-dark">
              <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th> <th>Status</th>    <th class="text-center">Ações</th> </tr>
            </thead>
            <tbody>
              <?php if (!empty($usuarios) && is_array($usuarios)): ?>
                <?php foreach ($usuarios as $row): ?>
                  <tr>
                    <td><?= esc($row['id']) ?></td>
                    <td><?= esc($row['nome']) ?></td>
                    <td><?= esc($row['email']) ?></td>
                    
                    <td><?= isset($row['permissao']) ? esc($row['permissao']) : 'Usuário' ?></td>
                    
                    <td>
                      <?php 
                        $status = isset($row['status']) ? esc($row['status']) : 'ativo';
                        $badgeClass = ($status == 'ativo') ? 'bg-success' : 'bg-secondary';
                      ?>
                      <span class="badge <?= $badgeClass ?>"><?= ucfirst($status) ?></span>
                    </td>

                    <td class="actions-cell">
                      <a href="/edit/<?= $row['id'] ?>" class="btn btn-primary btn-sm" title="Editar">
                        <i class="bi bi-pencil-fill"></i>
                      </a>
                      <button type="button" class="btn btn-danger btn-sm" title="Excluir"
                              data-bs-toggle="modal" 
                              data-bs-target="#confirmDeleteModal"
                              data-bs-id="<?= esc($row['id']) ?>"
                              data-bs-nome="<?= esc($row['nome']) ?>">
                        <i class="bi bi-trash-fill"></i>
                      </button>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else: ?>
                <tr>
                  <td colspan="6" class="text-center">Nenhum usuário encontrado.</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>

        <?php if ($pager): ?>
          <div class="d-flex justify-content-center mt-3">
            <?= $pager->links('usuarios', 'bootstrap') ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalLabel"><i class="bi bi-exclamation-triangle-fill text-danger"></i> Confirmar Exclusão</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Você tem certeza que deseja excluir o usuário <strong id="modalUserName"></strong>?
          <p class="text-danger small mt-2">Esta ação não pode ser desfeita.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <a id="modalConfirmDeleteButton" href="#" class="btn btn-danger">Sim, excluir</a>
        </div>
      </div>
    </div>
  </div>
  <footer class="text-center mt-4 mb-3">
    &copy; <?= date('Y') ?> Feito por Sarah Fróes
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    // --- SCRIPT DA BARRA DE PESQUISA (ATUALIZADO) ---
    const searchInput = document.getElementById('searchInput');
    const table = document.getElementById('userTable').getElementsByTagName('tbody')[0];

    searchInput.addEventListener('keydown', function(e) {
      if (e.key === "Enter") {
        e.preventDefault(); // evita submit ao pressionar Enter
      }
    });

    searchInput.addEventListener('keyup', function() {
      // Converte o texto digitado para minusculas
      const filter = searchInput.value.toLowerCase();
      const rows = table.getElementsByTagName('tr');

      // Percorre todas as linhas da tabela
      for (let i = 0; i < rows.length; i++) {
        // Pega o conteudo de cada celula da linha
        const id = rows[i].cells[0].textContent.toLowerCase();        // Coluna 0: ID
        const name = rows[i].cells[1].textContent.toLowerCase();      // Coluna 1: Nome
        const email = rows[i].cells[2].textContent.toLowerCase();     // Coluna 2: Email
        const permissao = rows[i].cells[3].textContent.toLowerCase(); // Coluna 3: Permissão
        const status = rows[i].cells[4].textContent.toLowerCase();    // Coluna 4: Status

        // Verifica se o texto digitado está contido em alguma das colunas
        if (id.includes(filter) || 
            name.includes(filter) || 
            email.includes(filter) ||
            permissao.includes(filter) ||
            status.includes(filter)) {
          rows[i].style.display = ''; // mostra a linha
        } else {
          rows[i].style.display = 'none'; // esconde a linha
        }
      }
    });

    // --- NOVO SCRIPT PARA O MODAL DE EXCLUSÃO ---
    const confirmDeleteModal = document.getElementById('confirmDeleteModal');
    if (confirmDeleteModal) {
      confirmDeleteModal.addEventListener('show.bs.modal', function (event) {
        // Botão que acionou o modal
        const button = event.relatedTarget;
        
        // Extrair info dos atributos data-bs-*
        const userId = button.getAttribute('data-bs-id');
        const userName = button.getAttribute('data-bs-nome');

        // Atualizar o conteúdo do modal
        const modalUserName = confirmDeleteModal.querySelector('#modalUserName');
        const modalConfirmButton = confirmDeleteModal.querySelector('#modalConfirmDeleteButton');

        modalUserName.textContent = userName; // Coloca o nome do usuário no texto
        modalConfirmButton.href = `/delete/${userId}`; // Define o link de exclusão
      });
    }
  </script>

</body>
</html>