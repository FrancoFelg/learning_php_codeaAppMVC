<?php 
require_once("config.php");
require_once("controlador/index.php");

if(isset($_GET['m'])):
    if(method_exists("modeloController", $_GET['m'])):
        modeloController::{$_GET['m']}(); //Se invoca el método index de ModeloController
    endif;
else:
    modeloController::index(); //Se invoca el método index de ModeloController
endif;

//var_dump(urlsite);

?>