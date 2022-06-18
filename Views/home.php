<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css">
</head>

<body class="bg-warning">
    <div class="container">
        <div class="row mt-3">
            <div class="col-lg-4 m-auto">
                <div class="card mt-5">
                    <div class="card-header bg-primary text-center">
                        <strong class="text-white">Iniciar Sesión</strong><br>
                        <img class="img-thumbnail" src="<?php echo base_url(); ?>/Assets/img/logo.png" width="100">
                    </div>
                    <div class="card-body">
                        <?php if (isset($_GET['msg'])) { ?>
                            <div class="alert alert-danger" role="alert">
                                <strong>Usuario o contraseña Incorrecta</strong>
                            </div>
                        <?php } ?>
                        <form action="<?php echo base_url(); ?>Usuarios/login" method="post" autocomplete="off">
                            <div class="form-group">
                                <strong class="text-primary">Usuario</strong>
                                <input id="usuario" class="form-control" type="text" name="usuario" placeholder="Usuario">
                            </div>
                            <div class="form-group">
                                <strong class="text-primary">Contraseña</strong>
                                <input id="clave" class="form-control" type="password" name="clave" placeholder="Contraseña">
                            </div>
                            <button class="btn btn-primary btn-block" type="submit">Iniciar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<style>
body{
    background-image: linear-gradient(to bottom, #00a7f4, #4dbef1, #83d3ed, #b5e5ee, #e6f6f6);

    background-repeat: no-repeat ;
    background-size: cover;
    background-attachment: fixed;
}


.card-body{
    background: rgba(0, 0, 0, 0.007);
    padding: 20px;
    border-radius: 5px;
}

.mt-5{

    background: rgba(0, 0, 0, 0.000);
    padding: 20px;
    box-shadow: 0.5px 0.5px 30px rgba(0, 0, 0, 0.377);
    border-radius: 10px;

}


</style>

</html>