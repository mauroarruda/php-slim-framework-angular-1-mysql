<?php 

require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route

$app->get(
    '/',
    function () {
       require_once("view/index.php");
    }
);
$app->get(
    '/index',
    function () {
       require_once("view/index.php");
    }
);
$app->get(
    '/list',
    function () {
       require_once("view/page_list.php");
    }
);
$app->get(
    '/edit',
    function () {
       require_once("view/page_edit.php");
    }
);
//get select
$app->get('/usuarios',function(){
        require_once("routes/listar.php");
});

$app->delete('/removeUsuario-:id_usuario',function($id_usuario){
    
    require 'inc/configuration.php';

    $sql = new Sql();
    $result = $sql->query("DELETE FROM tb_usuarios WHERE id_usuario =".$id_usuario."");

    echo json_encode($result);
});

$app->post(
    '/cadastrar',
    function () {
        echo 'This is a POST route';
    }
);

// PUT route
$app->put(
    '/alterar',
    function () {
        echo 'This is a PUT route';
    }
);


$app->run();

?>