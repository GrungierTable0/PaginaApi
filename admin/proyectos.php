<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../CSS/main.css">
    <script src="https://kit.fontawesome.com/7a93f8c7d6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Administración de Proyectos</title>
</head>

<body>
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block" href="../usermain.php">Regresar</a>
        </nav>
    </header>
    <div id="medio" class="row">
        <div class="col">
            <h1 class="text-center">Proyectos</h1>
            <a class="btn btn-success" href="view/crearproyecto.form.php" role="button"><i class="fa-solid fa-plus"></i></a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nombre del Proyecto</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                        <td></td>
                        <td><a class="btn btn-danger" href="#" role="button"><i class="fa-solid fa-eraser"></i></a><a class="btn btn-success" href="view/modificarproyecto.form.php" role="button"><i class="fa-solid fa-wand-magic-sparkles"></i></a></td>
                    </tr>
                </tbody>
            </table>
            <p class="text-left" ></p>
        </div>
    </div>        
</body>

</html>