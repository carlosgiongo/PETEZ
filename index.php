<?php
  // include_once 'database/db.php';
  $title = "Página Inicial";
  include_once 'header.php';
  // include_once './API/produtos/produtos.php'; //<--- SE PREFERIR TRABALHAR COM O PHP AO INVÉS DE CHAMADA API
?>

<div id="myCarousel" class="carousel slide container" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= IMG_PATH ?>/banner/banner_cachorro.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-start">
            <h1>Encontre tudo o que precisa,</h1>
            <p>para o seu melhor amigo!</p>
            <p><a class="btn btn-lg btn-primary" href="./register.php">Registre-se</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= IMG_PATH ?>/banner/banner_areia.png" alt="" width="1366" height="768">
        <div class="container">
          <div class="carousel-caption text-end">
            <h1 class="text-dark">PETEZ. Artigos para O SEU pet!</h1>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?= IMG_PATH ?>/banner/banner_gato.jpg" alt="">
        <div class="container">
          <div class="carousel-caption text-end">
            <h3>Os melhores PREÇOS esperando por você!</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <br />
  <div class="container">
    <div class="row">
      <div class="col-sm-3" ng-repeat="i in produtos">
        <form action="API/carrinho/insere.php" method="POST">
          <div class="card z-index-2">
            <img class="card-img-top img-fluid" src="//placehold.it/500x200" alt="">
            <div class="card-body">
              <input type="hidden" name="idProduto" value={{i.ID}}>
              <input type="hidden" name="nomeProduto" value={{i.NOME}}>
              <input type="hidden" name="precoProduto" value={{i.PRECO_VENDA}}>
              <h3 class="card-title">{{ i.NOME }}</h3>
              <h5 class="card-text">R${{ i.PRECO_VENDA }}</h5>
              <button type="submit" style="background: none; border:none; z-index:100"><a class="btn btn-outline-dark">COMPRAR</a></button> 
            </div>
          </div>
        </form>
        <br />
      </div>
    </div>
  </div>
</body>

<?php include_once 'footer.php' ?>