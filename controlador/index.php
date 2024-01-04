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

    //editar
    static function editar(){
        $id = $_REQUEST["id"];//Obtenemos el ID de la request
        $producto = new Modelo();
        $datos = $producto->mostrar("productos", "id=".$id);//Obtenemos el producto con el ID obtenido
        require_once("vistas/editar.php");

    }

    //actualizar
    static function actualizar(){
        //Obtengo los parámetros
        $id = $_REQUEST["id"];//Obtenemos el ID de la request
        $nombre= $_REQUEST["nombre"];
        $precio= $_REQUEST["precio"];

        //Creo una variable con los datos
        $data = "nombre='".$nombre."',precio=".$precio;
        $producto = new Modelo();
        //Inserto los datos
        //Actualizar recibe la tabla, los datos y la condicion.
        $datos = $producto->actualizar("productos", $data, "id=".$id);
        header("location:".urlsite);
    }

   
    static function eliminar(){
        $id = $_REQUEST["id"];//Obtenemos el ID de la request
        $producto = new Modelo();
        $datos = $producto->eliminar("productos", "id=".$id);//Obtenemos el producto con el ID obtenido
        header("location:".urlsite);

    }




}

?>