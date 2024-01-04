<?php
class Modelo {
    private $Modelo;
    private $db;
    private $datos;

    public function __construct(){
        $this->Modelo=array();
        $this->db = new PDO('mysql:host=localhost;dbname=mvc_phpcodeaapp', "root", "");
    }

    //Métodos genéricos
    public function insertar($tabla, $data){
        $consulta="insert into ".$tabla." values(null,".$data.")";//Genera el script
        $resultado = $this->db->query($consulta);//Ejecuta el script y almacena el resultado
        //Si el resultado es true retorna true si no false
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function mostrar($tabla, $condicion){
        $consul="select * from ".$tabla." where ".$condicion.";";
        $resu=$this->db->query($consul);
        while($filas = $resu->fetchAll(PDO::FETCH_ASSOC)){
            $this->datos[]=$filas;//en vez de modelo va personas (?)
        }
        return $this->datos;
    }

    public function actualizar($tabla, $data, $condicion){
        $consulta="update " . $tabla . " set ". $data ." where ". $condicion;
        $resultado=$this->db->query($consulta);
        
        if($resultado){
            return true;
        }else{
            return false;
        }
    }

    public function eliminar($tabla, $condicion){
        $consulta="delete from " . $tabla  ." where ". $condicion;
        $resultado=$this->db->query($consulta);
        
        if($resultado){
            return true;
        }else{
            return false;
        }
    }



}
?>