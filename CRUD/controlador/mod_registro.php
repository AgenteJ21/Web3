<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["carnet"]) and !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        $id = $_POST["id"];
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $carnet = $_POST["carnet"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];
        $sql=$conexion->query(" update personas set nombre='$nombre',apellido='$apellido',carnet='$carnet',fecha_nac='$fecha',correo='$correo' where id=$id");
        if($sql==1){
            header("location:index.php");
        }else{
            echo "<div class='alert alert-danger'>Error de modificacion</div>";
        }
    }else{
        echo "<div class='alert alert-warning'>Campos vacios</div>";
    }

}
?>