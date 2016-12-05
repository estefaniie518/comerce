<!DOCTYPE html>
<html lang="es">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SISTEMA COMERCIAL: Iniciar Sesión </title>

    <!-- Bootstrap -->
    <link href="util/gentelella/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="util/gentelella/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="util/gentelella/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="util/gentelella/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="util/gentelella/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
              <!--<form action="../controlador/sesion.validar.controlador.php" method="get">  ***menos seguro porqe en la url se ven los datos-->
              <form action="../controlador/sesion.validar.controlador.php" method="post">
              <h1>Iniciar Sesión</h1>
              <div>
                  <input name="txtemail" type="email" class="form-control" placeholder="Email" required="" autofocus="" />
              </div>
              <div>
                  <input name="txtclave" type="password" class="form-control" placeholder="Clave" required="" />
              </div>
              
              <div>
                <!-- btn-block btn-flat <a class="btn btn-default submit" href="index.html">Ingresar</a>-->
                <button type="submit" class="btn btn-success">Ingresar</button> <!--cuando es submit va a llamar al action del form, mandandole los datos-->
                <a class="reset_pass" href="#">Perdiste tu contraseña?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Nuevo en el sitio?
                  <a href="#signup" class="to_register"> Crear Usuario </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> EA!</h1>
                  <p>©<?php echo date('Y');?> All Rights Reserved. EA!. Privacy and Terms</p>
                </div>
              </div>
            </form>
               <!--captha-->
    
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <form>
              <h1>Create Account</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input type="email" class="form-control" placeholder="Email" required="" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div>
                <a class="btn btn-default submit" href="index.html">Submit</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                  <!--<?//php echo date ("Y")?>-->
                  <p> <?php echo date ("Y")?> All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>