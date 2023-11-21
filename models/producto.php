<?php
class Model{
    private $PDO;
    public function __construct(){
        require_once("C:/xampp/htdocs/proyectd/config/bd1.php");
        $con=new bd();
        $this->PDO=$con->Conexion();
    }
    public function insertar_Producto($titulo, $subtitulo, $imagen, $rutaweb, $est, $destacado, $fecha){
        $stament=$this->PDO->prepare("INSERT INTO producto(id_producto,titulo,subtitulo,imagen,rutaweb,est,destacado,fecha) VALUES (null,:titulo,:subtitulo,:imagen,:rutaweb,:est,:destacado,:fecha)");
        $stament->bindParam(":titulo",$titulo);
        $stament->bindParam(":subtitulo",$subtitulo);
        $stament->bindParam(":imagen",$imagen);
        $stament->bindParam(":rutaweb",$rutaweb);
        $stament->bindParam(":est",$est);
        $stament->bindParam(":destacado",$destacado);
        $stament->bindParam(":fecha",$fecha);
        return ($stament->execute())?$this->PDO->lastInsertId():false;
    }
    public function get_producto_destacado(){
        $stament=$this->PDO->prepare("SELECT * FROM producto WHERE est=1 AND destacado=1");
        return ($stament->execute())?$stament->fetchAll(PDO::FETCH_ASSOC):false;
    }

    public function get_producto(){
        $stament=$this->PDO->prepare("SELECT * FROM producto WHERE est=1 AND destacado=0");
        return ($stament->execute())?$stament->fetchAll(PDO::FETCH_ASSOC):false;
    }
}
?>