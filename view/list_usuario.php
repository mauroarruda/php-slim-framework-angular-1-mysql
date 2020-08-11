	<div class="titulo">
		<h1>Lista de Usuários</h1>
		<hr>
	</div>

	<div class="container" ng-controller="usuario-controller">
		<div class="row table-responsive" >
			<table class="table table-bordered">
			  <thead>
			    <tr class="text-center">
			      <th scope="col" colspan="2">Nome</th>
			      <th scope="col">Email</th>
			      <th scope="col">CPF</th>
			      <th scope="col">Login</th>
			      <th scope="col">Senha</th>
			      <th scope="col">&nbsp;</th>
			    </tr>
			  </thead>
			  <tbody>
			    <tr ng-repeat="usuario in usuarios">
			      <td scope="row" colspan="2">
					{{usuario.nome_usuario}}
			      </td>
			      <td>
			      	{{usuario.email_usuario}}	
			      </td>
			      <td>
			      	{{usuario.cpf_usuario}}
			      </td>
			      <td>
			      	{{usuario.login_usuario}}
			      </td>
			      <td>
			      	{{usuario.senha_usuario}}
			      </td>
			      <td>
					<button class="btn btn-remove-edit-item" ng-click="editUsuario(usuario)">
 						<a href="edit" title=""><i class="fas fa-pen edit"></i></a>
 					</button>
			      	<button class="btn btn-remove-edit-item" ng-click="removeUsuario(usuario)">
			      		<i class="fas fa-trash-alt remove"></i>
			      	</button>
			      </td>
			    </tr>
			  </tbody>
			</table>	
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

						$scope.usuarios = response.data;

				  	}, 
				  	function errorCallback(response){
				  		console.error('Deu Ruim :', response);
				  	}
			);
	 	}
	 	carregarUsuarios();

		$scope.removeUsuario = function(_usuario){
	 		$http({
	 			method:'DELETE',
	 			url:'removeUsuario-'+_usuario.id_usuario
	 			}).then(function(response){
	 				carregarUsuarios();
	 			},function(){
	 				console.error('Deu Ruim : Não removeu');
	 			});
	 	}


	});
	</script>