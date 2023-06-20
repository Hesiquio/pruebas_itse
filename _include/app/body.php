 <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="#" class="site_title"><img src="<?=$img_app;?>itse_emblema.png" class="" width="35" height="35"> <span>Tutorias ITSE </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="<?=$img_app;?>img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bienvenido,</span>
                <h2><?=$_SESSION["alias_us"];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>&nbsp;</h3>
                <ul class="nav side-menu">
                  <li class="active"><a href=""><i class="fa fa-home"></i> Inicio </a></li>
                  <li><a href="#" id="app1"><i class="fa fa-paste"></i> Psicopruebas</a></li>
                  <li><a href="#" id="app2"><i class="fa fa-inbox"></i> Factores</a></li>
                  <li><a href="#" id="app3"><i class="fa fa-edit"></i> Sistema 3</a></li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" onclick="launchFullscreen(document.documentElement);" id="Full-Screen" data-placement="top" title="Patalla Completa">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
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
                  <a href="javascript:" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?=$img_app;?>img.jpg" alt=""><?=$_SESSION["alias_us"];?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:"> Perfil</a></li>
                    <li>
                      <a href="javascript:">
                        <span class="badge bg-green pull-right">100%</span>
                        <span>Actividad</span>
                      </a>
                    </li>
                    <li><a href="javascript:">Ayuda</a></li>
                    <li><a href="?cls=exit"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">3</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="<?=$img_app?>user.png" alt="Profile Image" /></span>
                        <span>
                          <span>Sistema Tutorias</span>
                          <span class="time">Aprox. 3 min</span>
                        </span>
                        <span class="message">
                          No has acompletado el test Psicopruebas
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?=$img_app?>user.png" alt="Profile Image" /></span>
                        <span>
                          <span>Sistema Tutorias</span>
                          <span class="time">Aprox. 3 min</span>
                        </span>
                        <span class="message">
                          No has iniciado la prueba Factores.
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="<?=$img_app?>user.png" alt="Profile Image" /></span>
                        <span>
                          <span>Sistema tutorias</span>
                          <span class="time">Aprox. 3 min</span>
                        </span>
                        <span class="message">
                          No has iniciado la prueba 3
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>Ver todas las notificaciones</strong>
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

        <div class="right_col" id="content_app" role="main">
        <!-- Bienvenida al alumno-->

        <div class="row">
          <div class="col col-md-12">
            <div class="page-title">
                <div class="title_left">
                  <h3>Bienvenido, Nombre Alumno</h3>
                </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input class="form-control" placeholder="buscar..." type="text">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ir!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
          <!-- fin de la bienvenida -->
          <br>
          <div class="row">


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_290">
                <div class="x_title">
                  <h2>Módulo de Psicopruebas</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <!--//-->
                  <div class="col-md-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_290">
                          <div class="x_content">

                            <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>
                                    <i class="fa fa-child"></i>
                                  </a>
                                </li>
                                <li>
                                  <a> <img src="<?=$img_app;?>academic.jpg" alt="..." class="img-circle profile_img"> </a>
                                </li>
                                <li>
                                  <a>
                                    <i class="fa fa-cogs"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>

                            <h3 class="name">PsicoTest</h3>
                            <div class="divider"></div>
                            <div>
                              <p>Proceso de la Prueba</p>
                              <div class="">
                                <div class="progress progress_sm" style="width: 100%;">
                                  <div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
                                </div>
                              </div>
                            </div>
                            <div class="divider"></div>
                            <p>
                              No has acompletado la prueba, para obtener tu resultado debes acompletarla en su totalidad del 100%. 
                            </p>
                            <div class="col col-xs-12" align="center">
                              <a href="#" id="app01" class="btn btn-warning"><i class="fa fa-refresh"></i> Terminar</a>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!--//-->
                </div>
              </div>
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320 overflow_hidden">
                <div class="x_title">
                  <h2>Módulo de Factores</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <table class="" style="width:100%">
                    <tr>
                      <th style="width:37%;">
                        <p>Top 5</p>
                      </th>
                      <th>
                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                          <p class="">Device</p>
                        </div>
                        <div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
                          <p class="">Progress</p>
                        </div>
                      </th>
                    </tr>
                    <tr>
                      <td>
                        <canvas id="canvas1" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
                      </td>
                      <td>
                        <table class="tile_info">
                          <tr>
                            <td>
                              <p><i class="fa fa-square blue"></i>IOS </p>
                            </td>
                            <td>30%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square green"></i>Android </p>
                            </td>
                            <td>10%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square purple"></i>Blackberry </p>
                            </td>
                            <td>20%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square aero"></i>Symbian </p>
                            </td>
                            <td>15%</td>
                          </tr>
                          <tr>
                            <td>
                              <p><i class="fa fa-square red"></i>Others </p>
                            </td>
                            <td>30%</td>
                          </tr>
                        </table>
                      </td>
                    </tr>
                  </table>
                  <div class="col col-xs-12" align="center">
                    <a href="#" id="app02" class="btn btn-warning"><i class="fa fa-refresh"></i> Empezar</a>
                  </div>
                </div>
              </div>
            </div>


            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="x_panel tile fixed_height_320">
                <div class="x_title">
                  <h2>En Espera del módulo..</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div class="dashboard-widget-content">
                    <ul class="quick-list">
                      <li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
                      </li>
                      <li><i class="fa fa-bars"></i><a href="#">Subscription</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
                      <li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
                      </li>
                      <li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
                      </li>
                    </ul>

                    <div class="sidebar-widget">
                      <h4>Profile Completion</h4>
                      <canvas width="150" height="80" id="foo" class="" style="width: 160px; height: 100px;"></canvas>
                      <div class="goal-wrapper">
                        <span class="gauge-value pull-left">$</span>
                        <span id="gauge-text" class="gauge-value pull-left">3,200</span>
                        <span id="goal-text" class="goal-value pull-right">$5,000</span>
                      </div>
                    </div>
                  </div>
                  <div class="col col-xs-12" align="center">
                    <a href="#" id="app03" class="btn btn-danger"><i class="fa fa-refresh"></i> Entrar</a>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- /page content -->

