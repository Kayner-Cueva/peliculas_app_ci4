<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('public/assets/css/login.css') ?> ">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <div id="login">
        <!-- <h3 class="text-center text-white pt-5">Bienvenido</h3> -->
        <div class="container">
            <!-- <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12"> -->
                        <form id="login-form" class="form" action="<?php echo base_url().'/login'?>" method="get">
                            <h1>Bienvenido</h1>
                            <div class="form-group">
                                <input type="text" name="txtUsuario" id="txtUsuario" class="form-control" placeholder="Usuario">
                                <i class='bx bx-user'></i>
                            </div>
                            <div class="form-group">
                                <input type="password" name="txtClave" id="txtClave" class="form-control" placeholder="Contraseña">
                                <i class='bx bx-lock-alt'></i>
                            </div>
                            <div class="form-bottom">
                                <label for="remember-me" class=""><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label>
                            </div>
                            <input type="submit" name="submit" class="btn" value="Ingresar">
                            <div id="register-link" class="register-link">
                                <label for="remember-me" class=""><span>Don't have an account?</span></label>
                                <a href="<?php echo base_url().'/nuevo_usuarios'?>" class="">Registrese aqui</a>
                            </div>
                        </form>
                    <!-- </div>
                </div>
            </div> -->
        </div>
    </div>
</body>
</html>