<pre>
<?php

require_once ('../models/CategoriaCrud.php');

if (isset($_GET['action'])){
    $action = $_GET['action'];
}else{
    $action = 'index';
}

switch($action){
    case 'index':

    $crud = new CategoriaCrud();
    $categorias = $crud->getCategorias();

    include('../view/template/cabecalho.php');
    include('../view/categoria/index.php');
    include('../view/template/rodape.php');

    break;

}

?>
