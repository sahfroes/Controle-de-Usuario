<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Redefinir senha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body>

<header class="top-bar d-flex align-items-center p-3 shadow-sm" style="background-color: #012f7a">
    <a href="<?= base_url('login') ?>" class="voltar me-3 text-decoration-none text-white d-flex align-items-center">
      <span class="back-arrow fs-2" >&#x2039;</span>
    </a>
    <h1 class="m-0 fs-4 text-white" >Voltar</h1>
  </header>



       <div class="container mt-5" style="max-width: 420px;">
    <div class="card p-4 shadow-sm" style="background-color: #f7f7f7; border-radius: 15px;">
    <h2 class="mb-4 text-center">Redefinir Senha</h2>
    <?php if (session()->getFlashdata('erro')): ?>
        <div class="alert alert-danger"><?= session()->getFlashdata('erro') ?></div>
    <?php endif; ?>
    <?php if (session()->getFlashdata('sucesso')): ?>
        <div class="alert alert-success"><?= session()->getFlashdata('sucesso') ?></div>
    <?php endif; ?>



    <form action="<?= base_url('redefinir-senha') ?>" method="post">
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

         <button type="submit" class="btn w-100 text-white"
          style="background-color: #004a99; border-radius: 25px;">
          Redefinir
        </button>

    </form>
</div>
</div>

<footer class="text-center mt-5 mb-3 text-muted small">
            &copy; <?= date('Y') ?> Feito por Sarah Fróes
        </footer>

</body>
</html>