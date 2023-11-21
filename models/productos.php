<?php
class Producto extends Conectar{
    public function get_producto_destacado(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM producto WHERE est=1 AND destacado=1";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_producto(){
        $conectar=parent::Conexion();
        parent::set_names();
        $sql="SELECT * FROM producto WHERE est=1 AND destacado=0";
        $sql=$conectar->prepare($sql);
        $sql->execute();
        return $resultado=$sql->fetchAll(PDO::FETCH_ASSOC);
    }

    public function agregar_producto($titulo, $subtitulo, $imagen, $rutaweb, $est, $destacado, $fecha){
        $conectar=parent::Conexion();
        parent::set_names();

        $sql="INSERT INTO producto VALUES (null, :titulo, :subtitulo, :imagen, :rutaweb, :est, :destacado, :fecha)";
        $stmt=$conectar->prepare($sql);
        $stmt->bindParam(':titulo', $titulo);
        $stmt->bindParam(':subtitulo', $subtitulo);
        $stmt->bindParam(':imagen', $imagen);
        $stmt->bindParam(':rutaweb', $rutaweb);
        $stmt->bindParam(':est', $est);
        $stmt->bindParam(':destacado', $destacado);
        $stmt->bindParam(':fecha', $fecha);

        $stmt->execute();

        // Obtener el último ID insertado
        $lastInsertId = $conectar->lastInsertId();

        return $lastInsertId;
    }
}
?>
