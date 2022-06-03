<?php
    require_once('../class/tarea.class.php');
    session_start();
    $id= isset($_GET['id']) ? $_GET['id'] : null;
    $_SESSION['id']=$id;
?>
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

    <title>Administración de Tareas</title>
</head>

<body>
    <header class="site-header sticky-top py-1">
        <nav class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2 d-none d-md-inline-block" href="../UserMain.php">Regresar</a>
        </nav>
    </header>
    <div id="medio" class="row">
        <div class="col">
        <h1 class="text-center">Tareas</h1>
            <a class="btn btn-success" href="view/creartarea.form.php?id=<?php echo $_SESSION['id'] ?>" role="button"><i class="fa-solid fa-plus"></i></a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Descripción</th>
                        <th scope="col">Completada?</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $tasks=$tarea->select($id,$_SESSION["auth"]);
                        foreach($tasks as $task):
                    ?>
                    <tr>
                        <td><?php echo $task->description?></td>
                        <td><?php if($task->finished==1){echo 'Chi uwu';} else{echo'no qwq';}?></td>
                        <td>
                            <a class="btn btn-danger" href="?id=<?php echo $_SESSION['id']?>&idt=<?php echo $task->id?>" role="button"><i class="fa-solid fa-eraser"></i></a>
                            <a class="btn btn-success" href="view/modificartarea.form.php?idt=<?php echo $task->id?>" role="button"><i class="fa-solid fa-wand-magic-sparkles"></i></a>
                        </td>
                    </tr>
                    <?php
                        endforeach;
                        $idt= isset($_GET['idt']) ? $_GET['idt'] : null;
                        if(is_null($idt)){}else{
                            $respond = $tarea->delete($idt,$_SESSION['auth']);
                            print_r($respond);
                            if(empty($_GET['status'])){
                                header("Location:?id=".$_SESSION['id']."&status=1");
                           }
                        }
                    ?>
                </tbody>
            </table>
            <p class="text-left" ></p>
        </div>
    </div>  
</body>

</html>
