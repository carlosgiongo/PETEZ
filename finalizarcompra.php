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
                <div class="text-center">
                    <h1>Realizar pagamento</h1>
                    <input class="form-control" type="text" placeholder="Nome completo">
                    <input class="form-control" type="text" placeholder="Numero do cartao">
                    <input class="form-control" type="text" placeholder="Codigo de segurança">
                    <button class="btn btn-outline-dark" style="margin: 10px 0;" onclick="concluirPagamento()">Concluir</button>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include_once "footer.php";
?>