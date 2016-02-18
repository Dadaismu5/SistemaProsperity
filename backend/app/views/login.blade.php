<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>
        <!-- META SECTION -->
        <title>Login</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->

        <!-- CSS INCLUDE -->
        <link rel="stylesheet" type="text/css" id="theme" href="css/theme-default.css"/>
        <!-- EOF CSS INCLUDE -->
    </head>
    <body>

        <div class="login-container lightmode">

            <div class="login-box animated fadeInDown">
                <div class="login-logo"></div>
                <div class="login-body">
                    <div class="login-title"><strong>Bienvenido</strong></div>
                    <form action="login" id="login" class="form-horizontal" method="post">
                      @if (Session::has('login_errors'))
                        <div class="alert alert-danger alert-dismissible text-center">
                          El usuario y/o la contraseña es incorrecta.
                        </div>
                      @endif  
                      <div class="form-group">
                          <div class="col-md-12">
                              <input type="text" name="username" id="username" required class="form-control" placeholder="Usuario"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-12">
                              <input type="password" name="password" id="password" required class="form-control" placeholder="Contraseña"/>
                          </div>
                      </div>
                      <div class="form-group">
                          <div class="col-md-6">
                              <a href="#" class="btn btn-link btn-block">¿No recuerda su contraseña?</a>
                          </div>
                          <div class="col-md-6">
                              <button class="btn btn-info btn-block">Entrar</button>
                          </div>
                      </div>
                    </form>
                </div>
                <div class="login-footer">
                    <div class="pull-left">
                        &copy; 2016 Woorx
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript" src="/js/plugins/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="/js/plugins/jquery-validation/jquery.validate.js"></script>
    <script type="text/javascript" src="/js/authValidations.js"></script>
</html>
