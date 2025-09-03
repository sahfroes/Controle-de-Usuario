

<!-- filepath: c:\xampp\htdocs\meu-formulario\app\Views\lista-usuario.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

   
</head>
<body>

<!-- Container principal centralizado -->
<div class="container" style="max-width: 900px; margin-top: 30px;">

 <!-- Título centralizado com ícone -->
    <h1 class="mb-3 text-center">
        <i class="bi bi-people-fill"></i>
        Lista de Usuários
    </h1>

    <!-- Botão e barra de pesquisa juntos, abaixo do título -->
    <div class="d-flex align-items-center justify-content-center mb-4">
        <!-- Botão para criar novo usuário -->
        <a href="/create" class="btn btn-success btn-sm me-2">
            <i class="bi bi-person-plus-fill"></i> Novo Usuário
        </a>
        <!-- Barra de pesquisa com ícone -->
        <div class="input-group" style="max-width: 350px;">
            <span class="input-group-text bg-white border-end-0">
                <i class="bi bi-search"></i>
            </span>
            <input type="text" id="searchInput" class="form-control form-control-sm" placeholder="Pesquisar por ID, nome ou e-mail...">
        </div>
    </div>
</div>




  


<!--Tabela mostra os usuarios-->
    <table id="userTable" class="table" border="1" style="max-width: 2000px; margin-top: 10px;">
        <thead class>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Senha</th>
                <th>Ações</th>
            </tr>
        </thead>
        
<!--Exibe os usuarios vindo do php-->
        <tbody>
            <?php if (!empty($usuarios) && is_array($usuarios)): ?>
                <?php foreach ($usuarios as $row): ?>
                    <tr>
                        <td><?= esc($row['id']) ?></td>
                        <td><?= esc($row['nome']) ?></td>
                        <td><?= esc($row['email']) ?></td>
                        <td><?= esc($row['senha']) ?></td>
                        <td>

                        <!--Botoes de ação-->
                             <a href="/edit/<?= $row['id'] ?>" class="btn btn-primary">Editar</a>
                            <a href="/delete/<?= $row['id'] ?>" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
  <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
</svg></a>                        
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>

                <!--Caso não tenha usuario-->
                <tr>
                    <td colspan="5">Nenhum usuário encontrado.</td>
                </tr>
            <?php endif; ?>
            
        </tbody>
        
    </table>
 
      
<script>
    //Pega o campo de pesquisa pelo Id
    const searchInput = document.getElementById('searchInput');

    //Pega apenas o corpo da tabela (tbody) onde estão os dados
     const table = document.getElementById('userTable').getElementsByTagName('tbody')[0];

     //Evita que o enter recarregue a pagina
    searchInput.addEventListener('keydown', function(e) {
        if (e.key === "Enter") {
            e.preventDefault(); // evita submit ao pressionar Enter
     }
    });


    //evento disparado toda vez que o usario digita algo no campo
        searchInput.addEventListener('keyup', function() {
    
    //converte o texto digitado para minusculas(para evitar erros ortograficos com letra minusculas e maiusculas)        
        const filter = searchInput.value.toLowerCase();

    //Pega todas as linhas da tabela    
        const rows = table.getElementsByTagName('tr');

     //percorre todas as linhas da tabela   
        for (let i = 0; i < rows.length; i++) {

    //pega o conteudo de cada celula da linha
            const id = rows[i].cells[0].textContent.toLowerCase(); //coluna id
            const name = rows[i].cells[1].textContent.toLowerCase();//coluna nome
            const email = rows[i].cells[2].textContent.toLowerCase();//coluna email

    //verifica se o texto digitado está contido em alguma das colunas        
            if (id.includes(filter) || name.includes(filter) || email.includes(filter)) {
                rows[i].style.display = ''; //mostra a linha
            } else {
                rows[i].style.display = 'none'; //esconde a linha
            }
        }
    });
</script>

     <footer class="text-center mt-5 mb-3 text-muted small">
            &copy; <?= date('Y') ?> Feito por Sarah Fróes
   </footer>
</body>
</html>