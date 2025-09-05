
<!-- filepath: c:\xampp\htdocs\meu-formulario\app\Views\registro.php -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registrar</title>
    <link rel="stylesheet" href="<?= base_url('style.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>


<body>

  <header class="top-bar d-flex align-items-center p-3 bg-light shadow-sm">
    <a href="<?= base_url('login') ?>" class="voltar me-3 text-decoration-none text-dark">
      <span class="back-arrow fs-2">&#x2039;</span>
    </a>
    <h1 class="m-0 fs-4">Voltar</h1>
  </header>

    <div class="container mt-5" style="max-width: 500px;">
        <h1>Registro</h1>

        <form action="<?= base_url('registrar') ?>"  method="post">

    

         <div class="input-group mb-3">
        <span class="input-group-text bg-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
</svg>
        </span>
        <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome completo" required>
      </div>


         <div class="input-group mb-3">
        <span class="input-group-text bg-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope">
            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zM.966 13.259l5.64-3.47L8 9.583l1.326.795 5.64 3.471A1 1 0 0 1 14 14H2a1 1 0 0 1-.966-.741z"/>
          </svg>
        </span>
        <input type="email" class="form-control" id="email" name="email" placeholder="E-mail cadastrado" required>
      </div>

               <div class="input-group mb-3">
        <span class="input-group-text bg-white">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-lock">
            <path fill-rule="evenodd" d="M8 0a4 4 0 0 1 4 4v2.05a2.5 2.5 0 0 1 2 2.45v5a2.5 2.5 0 0 1-2.5 2.5h-7A2.5 2.5 0 0 1 2 13.5v-5a2.5 2.5 0 0 1 2-2.45V4a4 4 0 0 1 4-4M4.5 7A1.5 1.5 0 0 0 3 8.5v5A1.5 1.5 0 0 0 4.5 15h7a1.5 1.5 0 0 0 1.5-1.5v-5A1.5 1.5 0 0 0 11.5 7zM8 1a3 3 0 0 0-3 3v2h6V4a3 3 0 0 0-3-3"/>
          </svg>
        </span>
        <input type="password" class="form-control" id="senha" name="senha" placeholder="Nova senha(6 caracteres)" required>
      </div>


         <button type="submit"  class="btn btn-primary"class="btn">Registrar</button>

<div class="register">
            <p>Já tem uma conta? <a href="<?= base_url('login') ?>">Login</a></p>
        </div>
       
        </form>


        <footer class="text-center mt-5 mb-3 text-muted small">
            &copy; <?= date('Y') ?> Feito por Sarah Fróes
        </footer>
    </div>
</body>



</html>