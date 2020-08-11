<div class="titulo">
    <h1>Cadastro de Usuário</h1>
    <hr>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <form>
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" placeholder="Nome">
          </div>
          <div class="col">
            <input type="email" class="form-control" placeholder="Email@email.com">
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" placeholder="CPF 11 digitos | Exemplo: 11123456789">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Senha 8 digitos | Exemplo: 12345678">
          </div>
        </div>
        <br>
        <button class="btn btn-lg btn-block btn-primary"type="submit">Cadastrar</button>
      </form>
    </div>
  </div>
</div>


<script>
  angular.module('usuarios-app',[])
  .controller('usuario-controller',function($scope,$http){

    var carregarUsuarios = function(){

      $http({
          method: 'GET',
          url: 'usuarios'
        })
        .then(function successCallback(response){
      
            console.log("teste",response.data);
            
            $scope.usuarios = response.data;

            }, 
            function errorCallback(response){
              console.error('Deu Ruim :', response);
            }
      );
    }
    carregarUsuarios();

    
});
</script>