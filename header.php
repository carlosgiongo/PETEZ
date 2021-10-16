<!DOCTYPE html>
<html lang="en">
<head>
    <?php
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
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="<?= IMG_PATH ?>/logo_header.png" alt="" width="140" height="35">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown07" data-bs-toggle="dropdown" aria-expanded="false">Menu</a>
            <ul class="dropdown-menu" aria-labelledby="dropdown07">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item">
          <button type="button" class="btn btn-dark rounded-pill">ENTRAR</button>
          </li>
          <li class="nav-item">
            <button type="button rounded-circle" class="btn btn-dark">
              <i class="fas fa-shopping-cart"></i>
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