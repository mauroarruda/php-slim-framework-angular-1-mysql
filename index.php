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
$app->get(

    '/usuarios',
    function(){

        require 'inc/configuration.php';

        $sql = new Sql();

        $data = $sql->select("SELECT * FROM tb_usuarios ORDER BY nome_usuario LIMIT 10");

        foreach ($data as &$produto){
            $produto['id_usuario'] = utf8_decode($produto['id_usuario']);
            $produto['nome_usuario'] = utf8_decode($produto['nome_usuario']);
            $produto['email_usuario'] = utf8_decode($produto['email_usuario']);
            $produto['senha_usuario'] = utf8_decode($produto['senha_usuario']);
            $produto['cpf_usuario'] = utf8_decode($produto['cpf_usuario']);
            $produto['login_usuario'] = utf8_decode($produto['login_usuario']);
        }

        echo json_encode($data);
    }
);

$app->delete('/removeUsuario-:id_usuario',function($id_usuario){
    
    require 'inc/configuration.php';

    $sql = new Sql();
    $result = $sql->query("DELETE FROM tb_usuarios WHERE id_usuario =".$id_usuario."");

    echo json_encode($result);
});

$app->run();

?>