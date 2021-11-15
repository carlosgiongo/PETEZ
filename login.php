<?php
  //include_once 'database/db.php';
  $title = "Login";
  include_once 'header.php';
?>

<body class="container">
  <main class="form-signin text-center">
    <form>
      <img class="mb-4" src="<?= IMG_PATH ?>/logo_header.png" alt="PETEZ Login" >
      <h1 class="h3 mb-3 fw-normal">Entre com seus dados</h1>
      <div class="form-floating">
        <input type="email" class="form-control" id="floatingInput" placeholder="nome@exemplo.com">
        <label for="floatingInput">E-mail</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" placeholder="Senha">
        <label for="floatingPassword">Senha</label>
      </div>
      <div class="row">
        <div class="col col-sm-6">
          <button class="w-100 btn btn-dark" type="submit">Entrar</button>
        </div>
        <div class="col col-sm-6">
          <a class="login_register" href="./register.php">Não tem cadastro?</a>
        </div>
      </div>
    </form>
  </main>
</body>

<?php include_once 'footer.php' ?>