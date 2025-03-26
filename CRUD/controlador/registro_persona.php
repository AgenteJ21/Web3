<?php
if(!empty($_POST["btnregistrar"])){
    if(!empty($_POST["nombre"]) and !empty($_POST["apellido"]) and !empty($_POST["carnet"]) and  !empty($_POST["fecha"]) and !empty($_POST["correo"])){
        $nombre = $_POST["nombre"];
        $apellido = $_POST["apellido"];
        $carnet = $_POST["carnet"];
        $fecha = $_POST["fecha"];
        $correo = $_POST["correo"];

        $sql=$conexion->query(" insert into personas(nombre,apellido,carnet,fecha_nac,correo)values('$nombre','$apellido','$carnet','$fecha','$correo')");
        if($sql==1){
            echo '<div class="alert alert-success">Persona registrada con exito</div>';
        }else{
            echo '<div class="alert alert-danger">Error de registro</div>';
        }
    }else{
        echo '<div class="alert alert-warning">Llene todos los campos</div>';
    }
}
?>