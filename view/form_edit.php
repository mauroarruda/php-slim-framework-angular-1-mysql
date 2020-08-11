<div class="titulo">
    <h1>
      Atualização do Usuário
      <span style="color:red;">ID:{{usuario.id_usuario}}</span>
    </h1>
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
            <input type="email" class="form-control" placeholder="Email">
          </div>
        </div>
        <br>
        <div class="form-row">
          <div class="col">
            <input type="text" class="form-control" placeholder="CPF">
          </div>
          <div class="col">
            <input type="text" class="form-control" placeholder="Senha">
          </div>
        </div>
        <br>
        <button class="btn btn-lg btn-block btn-primary"type="submit">Atuailzar</button>
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