<!DOCTYPE html>
<html lang="pt" ng-app="minhaApp" ng-controller="meuController" ng-init="carregarDados()">
<head>
    <?php
        include_once './database/db.php';
        session_start();
	      $url = getenv("TEST_URL");
        define('MAIN_URL', $url);
        define('CSS_PATH',"./src/css");
        define('JS_PATH',"./src/js");
        define('IMG_PATH',"./src/img");
        define('SRC_PATH',"./src");
        if(empty($title)){
            $title = "Artigos para seu PET";
        }
    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="OwO">
    <title>PETEZ | <?php echo $title ?></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="shortcut icon" href="<?= IMG_PATH ?>/paw_petez.svg" type="image/x-icon">
    <link rel="stylesheet" href="<?= CSS_PATH ?>/main.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php">
        <img src="<?= IMG_PATH ?>/logo_header.png" alt="" width="140" height="35">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="./login.php">
              <?php if(empty($_SESSION['id'])){?>
                <button type="button" class="btn btn-dark rounded-pill" style="margin: 0 10px;">ENTRAR</button>
              <?php } else {?>
                <label style="margin: 8px 8px;">Bem vindo, <?php echo $_SESSION['nome']?></label>
              <?php } ?>
            </a>
          </li>
          <li class="nav-item">
            <button type="button rounded-circle" class="btn btn-dark" id="btnCarrinho" aria-describedby="tooltip">
              <i class="fas fa-shopping-cart"></i>
              <div id="tooltip" role="tooltip">
                <?php if(count($_SESSION['carrinho']->itens) <= 0){?>
                  <div>Carrinho vazio</div>
                <?php } else { 
                  foreach ($_SESSION['carrinho']->itens as $produto) {?>
                    <div><?php echo $produto[1] . " - R$" . $produto[2];?></div>
                <?php } 
              }?>
              </div>
            </button>
          </li>
        </ul>
        <form>
          <input class="form-control" type="text" placeholder="Pesquisar" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
</header>