<?php
include 'acoes.php';
include 'head.php';

$url = explode('?' , $_SERVER['REQUEST_URI']);

include 'telas/menu.php';

switch($url[0]){
    case '/' :
        pageHome();
        break;
    case '/login' :
        pageLogin();
        break;
    case '/cadastro' :
        pageCadastro();
        break;
    case '/lista' :
        pageList();
        break;
    case '/excluir' :
        deleteCadastro();
        break;
    case '/editar' :
        editCadastro();
        break;
    default :
        pageError();
}



include 'footer.php';
?>