<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- META SECTION -->
        <title>
          @section('title')
            MiChuper
          @show
        </title>
        @section('header')
          <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
          <meta http-equiv="X-UA-Compatible" content="IE=edge" />
          <meta name="viewport" content="width=device-width, initial-scale=1" />

          <link rel="icon" href="/favicon.ico" type="image/x-icon" />
          <!-- END META SECTION -->

          <!-- CSS INCLUDE -->
          <link rel="stylesheet" type="text/css" id="theme" href="/css/theme-default.css" />
          <!-- EOF CSS INCLUDE -->
        @show
    </head>
    <body>
        <!-- START PAGE CONTAINER -->
        <div class="page-container">

            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="/customers">Mi Chuper</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <div class="profile">
                            <div class="profile-image">
                                <img src="/assets/images/users/avatar.jpg" alt="MiChuper"/>
                            </div>
                            <div class="profile-data">
                                <div class="profile-data-name">Bienvenido</div>
                                <div class="profile-data-title">
                                  @section('usuario')
                                    Omar Alejandro García Santacruz
                                  @show
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="xn-title">Menú</li>
                    <li class="active">
                        <a href="/customers"><span class="fa fa-users"></span> <span class="xn-text">Clientes</span></a>
                    </li>
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->

            <!-- PAGE CONTENT -->
            <div class="page-content">

                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li>
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SIGN OUT -->
                    <li class="xn-icon-button pull-right">
                        <a href="login" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span></a>
                    </li>
                    <!-- END SIGN OUT -->
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                  @section('navegation')
                    <li><a href="#">Inicio</a></li>
                  @show
                </ul>
                <!-- END BREADCRUMB -->

                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                    @yield('content')

                </div>
                <!-- END PAGE CONTENT WRAPPER -->

            </div>
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Finalizar <strong>Sesión</strong> ?</div>
                    <div class="mb-content">
                        <p>¿Esta seguro que desea finalizar la sesión?</p>
                        <p>
                          Presione No si desea continuar trabajando. Presione Si para cerrar la sesión del usuario actual.
                        </p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="/logout" class="btn btn-success btn-lg">Si</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

        <!-- START PRELOADS -->
        <audio id="audio-alert" src="/audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="/audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->

        @section('scripts')
          <!-- START SCRIPTS -->
          <!-- START PLUGINS -->
          <script type="text/javascript" src="/js/plugins/jquery/jquery.min.js"></script>
          <script type="text/javascript" src="/js/plugins/jquery/jquery-ui.min.js"></script>
          <script type="text/javascript" src="/js/plugins/bootstrap/bootstrap.min.js"></script>
          <!-- END PLUGINS -->

          <!-- START THIS PAGE PLUGINS-->
          <script type='text/javascript' src='/js/plugins/icheck/icheck.min.js'></script>
          <script type="text/javascript" src="/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
          <script type="text/javascript" src="/js/plugins/scrolltotop/scrolltopcontrol.js"></script>

          <script type="text/javascript" src="/js/plugins/morris/raphael-min.js"></script>
          <script type="text/javascript" src="/js/plugins/morris/morris.min.js"></script>
          <script type="text/javascript" src="/js/plugins/rickshaw/d3.v3.js"></script>
          <script type="text/javascript" src="/js/plugins/rickshaw/rickshaw.min.js"></script>
          <script type='text/javascript' src='/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js'></script>
          <script type='text/javascript' src='/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js'></script>
          <script type='text/javascript' src='/js/plugins/bootstrap/bootstrap-datepicker.js'></script>
          <script type="text/javascript" src="/js/plugins/owl/owl.carousel.min.js"></script>

          <script type="text/javascript" src="/js/plugins/moment.min.js"></script>
          <script type="text/javascript" src="/js/plugins/daterangepicker/daterangepicker.js"></script>
          <!-- END THIS PAGE PLUGINS-->

          <!-- START TEMPLATE -->
          <!--<script type="text/javascript" src="js/settings.js"></script>-->

          <script type="text/javascript" src="/js/plugins.js"></script>
          <script type="text/javascript" src="/js/actions.js"></script>

          <script type="text/javascript" src="/js/demo_dashboard.js"></script>
          <!-- END TEMPLATE -->
        @show
    <!-- END SCRIPTS -->
    </body>
</html>
