<?php
  //include_once 'database/db.php';
  $title = "Cadastro";
  include_once 'header.php';
?>

<body class="container">
  <main>
    <form>
      <h3>Dados</h3>
      <div class="row">
        <div class="mb-3 col col-sm-6">
          <label for="name" class="form-label">Nome</label>
          <input type="text" class="form-control" placeholder="Nome" id="name">
        </div>
        <div class="mb-3 col col-sm-6">
          <label for="sobrenome" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="sobrenome" placeholder="Sobremone">
        </div>
        <div class="mb-3 col col-sm-6">
          <label for="cpf" class="form-label">CPF/CNPJ</label>
          <input type="number" class="form-control" id="cpf" placeholder="CPF/CNPJ">
        </div>
        <div class="mb-3 col col-sm-6">
          <label for="birth" class="form-label">Data de nascimento</label>
          <input type="date" class="form-control" id="birth" placeholder="Data de nascimento">
        </div>
        <div class="mb-3 col col-sm-6">
          <label for="exampleInputEmail1" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="email@exemplo.com.br">
        </div>
        <div class="mb-3  col col-sm-6">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
        </div>
        
          <h3>Endereço</h3>
          <div class="mb-3 col col-sm-12 col-md-3">
            <label for="destinatario" class="form-label">Destinatário</label>
            <input type="text" class="form-control" id="destinatario" placeholder="Destinatário">
          </div>
          <div class="mb-3 col col-sm-12 col-md-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="number" class="form-control" id="cep" placeholder="CEP">
          </div>
          <div class="mb-3 col col-sm-12 col-md-3">
            <label for="city" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="city" placeholder="Cidade">
          </div>
          <div class="mb-3 col col-sm-12 col-md-3">
            <label for="uf" class="form-label">UF</label>
            <input type="text" class="form-control" id="city" placeholder="UF">
          </div>
          <div class="mb-3 col col-sm-6 col-md-3">
            <label for="street" class="form-label">Rua</label>
            <input type="text" class="form-control" id="street" placeholder="Rua">
          </div>
          <div class="mb-3 col col-sm-6">
            <label for="number" class="form-label">Número</label>
            <input type="text" class="form-control" id="number" placeholder="Número">
          </div>
          <div class="mb-3 col col-sm-6">
            <label for="Complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="Complemento" placeholder="Complemento">
          </div>
          <div class="mb-3 col col-sm-6">
            <label for="Bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="Bairro" placeholder="Bairro">
          </div>
          <div class="mb-3 col col-sm-6">
            <label for="local" class="form-label">Referência de localização</label>
            <input type="text" class="form-control" id="local" placeholder="Referência de localização">
          </div>
          <div class="mb-3 col col-sm-6">
            <label for="phone" class="form-label">Telefone</label>
            <input type="number" class="form-control" id="phone" placeholder="(xx)xxxxx-xxxx">
          </div>
        
        <div class="col col-sm-3">
          <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
      </div>
    </form>
  </main>
</body>

<?php include_once 'footer.php' ?>