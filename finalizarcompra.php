<?php
include_once "header.php";
?>
<script>
    function concluirPagamento(){
        window.location.href = "./concluido.php"    
    }
</script>
<body>
    <div class="container">
        <div class="row">
            <div class="col d-flex justify-content-center">
                <form action="./concluido.php" method="post">
                    <div class="text-center">
                        <h1>Realizar pagamento</h1>
                        <input class="form-control" type="text" placeholder="Nome completo" required>
                        <input class="form-control" type="text" placeholder="Numero do cartao" required>
                        <input class="form-control" type="text" placeholder="Codigo de segurança" required>
                        <button class="btn btn-outline-dark" style="margin: 10px 0;" type="submit">Concluir</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<?php
include_once "footer.php";
?>