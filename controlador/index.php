<?php
require_once("modelo/index.php");//invocamos el archivo
class modeloController{

    private $model;
    public function __construct(){
        $this->model = new Modelo();
    }

    // mostrar
    static function index(){
        $producto = new Modelo();
        $datos = $producto->mostrar("productos","1");
        require_once("vistas/index.php");
    }

    //nuevo
    static function nuevo(){
        require_once("vistas/nuevo.php");
    }

    //guardar
    static function guardar(){
        //Obtengo los parámetros
        $nombre= $_REQUEST["nombre"];
        $precio= $_REQUEST["precio"];

        //Creo una variable con los datos
        $data = "'".$nombre."',".$precio;
        $producto = new Modelo();
        //Inserto los datos
        $dato = $producto->insertar("productos", $data);
        header("location:".urlsite);
    }


}

?>