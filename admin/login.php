<?php
    require_once('../class/login.class.php');
    error_reporting(E_ERROR | E_PARSE);
?>
<!doctype html>
<html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../CSS/main.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Login</title>
    </head>

    <body>
        <div class="b-example-divider"></div>

        <div class="modal modal-signin position-static d-block bg-secondary py-5" tabindex="-1" role="dialog" id="modalSignin">
            <div class="modal-dialog" role="document">
                <div class="modal-content rounded-5 shadow">
                    <?php
                        $data=isset($_POST['data'])?$_POST['data']:null;
                        if(isset($data['enviar'])){
                            if(empty($data['email'])){
                                echo '<div class="alert alert-danger" role = "alert" >Falta un correo</div>';
                            }else{
                                if(empty($data['password'])){
                                    echo '<div class="alert alert-danger" role = "alert" >Falta contraseña</div>';
                                }else{
                                    $respond=$login->login($data['email'],$data['password']);
                                    if(is_null($respond->token)){
                                        echo '<div class="alert alert-danger" role = "alert" >ha ocurrido un error favor de verificar</div>';
                                    }else{
                                        header('Location: ../usermain.php');  
                                        session_start();
                                        $_SESSION["email"] = $data['email'];
                                    }
                                }
                            }
                        }
                    ?>
                    <div class="modal-header p-5 pb-4 border-bottom-0">
                        <!-- <h5 class="modal-title">Modal title</h5> -->
                        <h2 class="fw-bold mb-0">Iniciar Sesión</h2>
                    </div>

                    <div class="modal-body p-5 pt-0">
                        <form method="POST" enctype="multipart/form-data" >
                            <div class="form-floating mb-3">
                                <input type="email" class="form-control rounded-4" placeholder="name@example.com" name="data[email]">
                                <label for="floatingInput">Correo electrónico</label>
                            </div>
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control rounded-4" placeholder="Password" name="data[password]">
                                <label for="floatingPassword">Contraseña</label>
                            </div>
                            <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit" name='data[enviar]'>Sign up</button>
                            <br/>
                            <br/>

                            
                        </form>
                        
                        
                    </div>
                </div>
            </div>
        </div>
            
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