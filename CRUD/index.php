<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dbefb916fe.js" crossorigin="anonymous"></script>
    <title>Crud con php y mysql</title>
</head>
<body>
    <script>
        function eliminar(){
            var respuesta=confirm("Seguro que desea eliminar?");
            return respuesta;
        }
    </script>
    <h1 class="text-center p-3">CRUD</h1>
    <?php
    include "modelo/conexion.php";
    include "controlador/eliminar_personar.php";
    ?>
    <div class="container-fluid row">
    <form class="col-4 p-3" method="POST">
        <h3 class="text-center text-secondary">Registro de personas</h3>
        <?php
        
        include "controlador/registro_persona.php";

        ?>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido</label>
            <input type="text" class="form-control" name="apellido">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Carnet</label>
            <input type="text" class="form-control" name="carnet">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Fecha de Nacimiento</label>
            <input type="date" class="form-control" name="fecha">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
            <input type="text" class="form-control" name="correo">
        </div>
        
        <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
    </form>
    <div class="col-8 p-4">
    <table class="table">
    <thead class="table-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Carnet</th>
            <th scope="col">Fecha de Nacimiento</th>
            <th scope="col">Correo</th>
            <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
        include "modelo/conexion.php";
        $sql=$conexion->query("select * from personas");
        while($datos=$sql->fetch_object()){ ?>
                <tr>
                    <td><?=$datos->id?></td>
                    <td><?=$datos->nombre?></td>
                    <td><?=$datos->apellido?></td>
                    <td><?=$datos->carnet?></td>
                    <td><?=$datos->fecha_nac?></td>
                    <td><?=$datos->correo?></td>
                    <td>
                        <a href="modificar_datos.php?id=<?= $datos->id ?>" class="btn btn-small btn-warning"><i class="fa-solid fa-pencil"></i></a>
                        <a onclick="return eliminar()" href="index.php?id=<?=$datos->id?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
        <?php
        }
        ?>
        
    </tbody>
    </table>
    </div>
    <p class="text-primary">Si esto es azul, Bootstrap funciona.</p>
    </div>
    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>