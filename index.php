<?php
  //include_once 'database/db.php';
  $title = "Página Inicial";
  include_once 'header.php';
  //include_once './API/produtos/produtos.php' <--- SE PREFERIR TRABALHAR COM O PHP AO INVÉS DE CHAMADA API
?>

<body>
<!-- FAZ O FETCH PARA API DE PRODUTOS -->
<script>
  fetch(<?php MAIN_URL ?>"API/produtos/produtos.php")
  .then(async function(resposta) {
    let todos_produtos = await resposta.json() 
    console.log(todos_produtos)
  })
</script>
</body>

<?php include_once 'footer.php' ?>