<?php
require_once("C:/xampp/htdocs/proyectd/controller/controller.php");
$obj=new Controller();
$obj->insert_Product($_POST['titulo'],$_POST['subtitulo'],$_POST['imagen'],$_POST['rutaweb'],$_POST['est'],$_POST['destacado'],$_POST['fecha']);
?>