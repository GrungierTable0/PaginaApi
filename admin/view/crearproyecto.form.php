<?php
    require_once("../../class/proyecto.class.php");
    session_start();
?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../../CSS/main.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Crear Proyectos</title>
    </head>

    <body>
        <header class="site-header sticky-top py-1">
            <nav class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2 d-none d-md-inline-block" href="../proyectos.php">Regresar</a>
            </nav>
        </header>
        <form method="POST" enctype="multipart/form-data" >
            <label class="form-label">Nombre del Proyecto: </label>
            <input class="form-control" type="text" name="data[name]"/>
            
            <input class="btn btn-primary" type="submit" value="Guardar Proyecto" name='data[enviar]'/>

        </form>
        <?php
            $data=isset($_POST['data'])?$_POST['data']:null;
            if(isset($data['enviar'])){
                if(empty($data['name'])){
                    echo '<div class="alert alert-danger" role = "alert" >ha ocurrido un error favor de verificar</div>';
                }else{
                    $respond=$proyecto->create($data['name'],$_SESSION['auth']);
                    if(is_null($respond->name)){
                        echo '<div class="alert alert-danger" role = "alert" >ha ocurrido un error favor de verificar</div>';
                    }else{
                        echo '<div class="alert alert-success" role = "alert" >Se ha realizado la accion correctamente</div>';
                    }
                }
                    
            }
        ?>
    </body>
    <footer class="container py-5">
        <div class="row">
            <div class="col-8 col-md">
                <h5>Comentarios</h5>
                <p class="lead fw-normal">Recuerda crear tu usuario para comenzar con nuestra unica e inigualable experiencia :) <br>
                    Cualquier problema no olvides comentarlo con nosotros uwu
                </p>
            </div>
            
        </div>
    </footer>

</html> 