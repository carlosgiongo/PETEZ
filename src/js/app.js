/* Criando aplicação angular */
var app = angular.module('minhaApp', []);

/* Declarando um controller para nossa aplicação */
app.controller('meuController', meuController);

/* Criando a função que será executada pelo controller */
function meuController($scope, $http) {
  $scope.produtos = [];
  
  $scope.buscarProdutos = function () {
    $http.get('./API/produtos/produtos.php').success(function (dados) {
      console.log("produtos", dados);
      $scope.produtos = dados;
    });
  };

  $scope.carregarDados = function () {
    $scope.buscarProdutos();
  };
}
