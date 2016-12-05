
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sistema Comercial</title>
        <!-- Bootstrap -->
        <link href="util/gentelella/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="util/gentelella/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="util/gentelella/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="util/gentelella/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="util/gentelella/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
        <!-- JQVMap -->
        <link href="util/gentelella/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>

        <!-- Custom Theme Style -->
        <link href="util/gentelella/build/css/custom.min.css" rel="stylesheet">
        <!--sweet alert-->
        <link href="util/gentelella/swa/sweetalert.css" rel="stylesheet">
</head>

<body class="nav-md">
    <div class="container body">
        <div class="main_container">
            <div class="col-md-3 left_col">
                <div class="left_col scroll-view">
                    <div class="navbar nav_title" style="border: 0;">
                        <a href="index.html" class="site_title"><i class="fa fa-certificate"></i> 
                            <span style="font-size: 18px;">Sistema Comercial</span>
                        </a>
                      </div>           
                    <div class="clearfix"></div>
                    <!-- menu profile quick info -->
                    <div class="profile">
                    <div class="profile_pic">
                        <img src="imagenes/1.png" alt="..." class="img-circle profile_img">
                    </div>
                    <div class="profile_info">
                      <span>Bienvenido,</span>
                      <h2>Usuario</h2>
                      <br>
                    </div>
                  </div>
                    <!-- /menu profile quick info -->
                    <!-- sidebar menu -->
                    <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                    <div class="menu_section">
                        <br>
                      <h3>General</h3>
                      <ul class="nav side-menu">
                        <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="index.html">Dashboard</a></li>
                            <li><a href="index2.html">Dashboard2</a></li>
                            <li><a href="index3.html">Dashboard3</a></li>
                          </ul>
                        </li>
                        <li><a><i class="fa fa-edit"></i> Mantenimientos <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="form.html">Líneas</a></li>
                            <li><a href="form_advanced.html">Categorías</a></li>
                            <li><a href="">Artículos</a></li>
                            <li><a href="form_wizards.html">Proveedores</a></li>
                            <li><a href="form_upload.html">Clientes</a></li>
                            <li><a href="form_buttons.html">Áreas</a></li>
                            <li><a href="form_buttons.html">Cargos</a></li>
                            <li><a href="form_buttons.html">Personal</a></li>
                          </ul>
                        </li>
                        <li><a><i class="fa fa-desktop"></i> Transacciones <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                              <li><a href="">Compras</a></li>
                            <li><a href="">Ventas</a></li>
                            <li><a href="typography.html">Almacen</a></li>
                            <li><a href="util/gentelella/icons.html">Caja</a></li>
                          </ul>
                        </li>
                        <li><a><i class="fa fa-table"></i> Reportes <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="tables.html">Tables</a></li>
                            <li><a href="tables_dynamic.html">Table Dynamic</a></li>
                          </ul>
                        </li>
                        <li><a><i class="fa fa-bar-chart-o"></i> Cuadros Estadísticos <span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li><a href="chartjs.html">Chart JS</a></li>
                            <li><a href="chartjs2.html">Chart JS2</a></li>
                            <li><a href="morisjs.html">Moris JS</a></li>
                            <li><a href="echarts.html">ECharts</a></li>
                            <li><a href="other_charts.html">Other Charts</a></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                    <!-- /sidebar menu -->
                    <!-- /menu footer buttons -->
                    <div class="sidebar-footer hidden-small">
                    <a data-toggle="tooltip" data-placement="top" title="Settings">
                      <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                      <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                    </a>
                    <a data-toggle="tooltip" data-placement="top" title="Lock">
                      <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                    </a>
                     <a data-toggle="tooltip" data-placement="top" title="Salir" href="">
                      <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                    </a>
      </div>
                    <!-- /menu footer buttons -->
                </div>
            </div>
            <!-- top navigation -->
            <div class="top_nav">
            <div class="nav_menu">
              <nav>
                <div class="nav toggle">
                  <a id="menu_toggle"><i class="fa fa-bars"></i></a>
                </div>

                <ul class="nav navbar-nav navbar-right">
                  <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                      <img src="imagenes/1.png" alt=""/>
                      <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                      <li><a href="javascript:;"> Profile</a></li>
                      <li>
                        <a href="javascript:;">
                          <span class="badge bg-red pull-right">50%</span>
                          <span>Settings</span>
                        </a>
                      </li>
                      <li><a href="javascript:;">Help</a></li>
                      <li><a href=""><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                    </ul>
                  </li>

                  <li role="presentation" class="dropdown">
                    <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                      <i class="fa fa-envelope-o"></i>
                      <span class="badge bg-green">6</span>
                    </a>
                    <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                      <li>
                        <a>
                          <span class="image"><img src="imagenes/1.png" alt="Profile Image" /></span>
                          <span>
                            <span>Nombre Usuario</span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image"><img src="imagenes/1.png" alt="Profile Image" /></span>
                          <span>
                            <span></span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image"><img src="imagenes/1.png" alt="Profile Image" /></span>
                          <span>
                            <span></span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <a>
                          <span class="image"><img src="imagenes/1.png" alt="Profile Image" /></span>
                          <span>
                            <span></span>
                            <span class="time">3 mins ago</span>
                          </span>
                          <span class="message">
                            Film festivals used to be do-or-die moments for movie makers. They were where...
                          </span>
                        </a>
                      </li>
                      <li>
                        <div class="text-center">
                          <a>
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                          </a>
                        </div>
                      </li>
                    </ul>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
            <!-- /top navigation -->
            <!-- page content -->
            <div class="right_col" role="main">






            </div>
            <!-- page content-->
            <footer>
            <div class="pull-right">
              EA! - Sistema Comercial USAT
            </div>
            <div class="clearfix"></div>
            </footer>
            <!-- /footer content -->
        </div>
    </div>
    <!-- jQuery -->
    <script src="util/gentelella/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="util/gentelella/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="util/gentelella/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="util/gentelella/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="util/gentelella/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="util/gentelella/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="util/gentelella/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="util/gentelella/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="util/gentelella/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="util/gentelella/Flot/jquery.flot.js"></script>
    <script src="util/gentelella/Flot/jquery.flot.pie.js"></script>
    <script src="util/gentelella/Flot/jquery.flot.time.js"></script>
    <script src="util/gentelella/Flot/jquery.flot.stack.js"></script>
    <script src="util/gentelella/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="util/gentelella/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="util/gentelella/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="util/gentelella/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="util/gentelella/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="util/gentelella/jqvmap/dist/jquery.vmap.js"></script>
    <script src="util/gentelella/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="util/gentelella/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="util/gentelella/js/moment/moment.min.js"></script>
    <script src="util/gentelella/js/datepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="util/gentelella/build/js/custom.min.js"></script>

    <!-- SweetAlert -->
    <script src="util/gentelella/swa/sweetalert-dev.js"></script>

    <!-- inputmask-->
    <script src="util/gentelella/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>

    <!--util-->
    <script src="js/util.js"></script>


    <script src="util/gentelella/jquery.inputmask/dist/jquery.inputmask.bundle.js"></script>
    <script src="util/gentelella/jquery.inputmask/extra/bindings/inputmask.binding.js"></script>
</body>
</html>
