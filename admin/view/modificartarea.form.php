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

        <title>Modificar Tarea</title>
    </head>

    <body>
        <header class="site-header sticky-top py-1">
            <nav class="container d-flex flex-column flex-md-row justify-content-between">
                <a class="py-2 d-none d-md-inline-block" href="../tareas.html">Regresar</a>
            </nav>
        </header>
        <form method="POST" enctype="multipart/form-data" >
            <label class="form-label">Descripción: </label>
            <input class="form-control" type="text" name="data[name]"/>

            <label class="form-label"><input type="checkbox" name="data[finished]"/> Esta completa? </label>
            <br>
            
            <input class="btn btn-primary" type="submit" value="Modificar Tarea" name='data[enviar]'/>

        </form>
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