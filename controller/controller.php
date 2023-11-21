<?php
class Controller{
    private $model;
    public function __construct(){
        require_once("C:/xampp/htdocs/proyectd/models/producto.php");
        $this->model=new Model();
    }
    public function insert_Product($titulo, $subtitulo, $imagen, $rutaweb, $est, $destacado, $fecha){
        $idInsert=$this->model->insertar_Producto($titulo, $subtitulo, $imagen, $rutaweb, $est, $destacado, $fecha);
        return ($idInsert!=false)?header("location: agregar.php"):false;
    }
}
?>