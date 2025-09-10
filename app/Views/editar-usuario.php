
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edição de usuário</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer"> 
</head>

<header class="top-bar d-flex align-items-center p-3 shadow-sm" style="background-color: #012f7a">
    <a href="<?= base_url('lista-usuario') ?>" class="voltar me-3 text-decoration-none text-white d-flex align-items-center">
      <span class="back-arrow fs-2" >&#x2039;</span>
    </a>
    <h1 class="m-0 fs-4 text-white" >Voltar</h1>
  </header>

<body>

    
 <div class="container mt-5" style="max-width: 500px;">
    <div class="card p-4 shadow-sm" style="background-color: #f7f7f7; border-radius: 15px;">
        <h1>Edição de Usuário</h1>

        <form action="/update/<?= esc($usuario['id']) ?>" method="POST">
        <input type="hidden" name="id" value="<?= $usuario['id'] ?>">  

         <div class="input-group mb-3">
        <span class="input-group-text bg-white">
       <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill-gear" viewBox="0 0 16 16">
  <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0m-9 8c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4m9.886-3.54c.18-.613 1.048-.613 1.229 0l.043.148a.64.64 0 0 0 .921.382l.136-.074c.561-.306 1.175.308.87.869l-.075.136a.64.64 0 0 0 .382.92l.149.045c.612.18.612 1.048 0 1.229l-.15.043a.64.64 0 0 0-.38.921l.074.136c.305.561-.309 1.175-.87.87l-.136-.075a.64.64 0 0 0-.92.382l-.045.149c-.18.612-1.048.612-1.229 0l-.043-.15a.64.64 0 0 0-.921-.38l-.136.074c-.561.305-1.175-.309-.87-.87l.075-.136a.64.64 0 0 0-.382-.92l-.148-.045c-.613-.18-.613-1.048 0-1.229l.148-.043a.64.64 0 0 0 .382-.921l-.074-.136c-.306-.561.308-1.175.869-.87l.136.075a.64.64 0 0 0 .92-.382zM14 12.5a1.5 1.5 0 1 0-3 0 1.5 1.5 0 0 0 3 0"/>
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

      <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="/lista-usuario" class="btn btn-danger">Cancelar</a>

</form>
</div>

<footer class="text-center mt-5 mb-3 text-muted small">
            &copy; <?= date('Y') ?> Feito por Sarah Fróes
        </footer>
   </div>    
  



</body>
</html>