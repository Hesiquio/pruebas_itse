<?php
    $id = $_SESSION["session_student"];
    $alias = $_SESSION["alias_us"];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tutorias ITSE | </title>
    <link href="<?=$img_app;?>itse_emblema.png" rel="icon" type="image/x-png" />

    <!-- Bootstrap -->
    <link href="<?=$vendors;?>bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?=$vendors;?>font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?=$vendors;?>nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?=$vendors;?>iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <link href="<?=$vendors;?>google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="<?=$vendors;?>select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="<?=$vendors;?>switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="<?=$vendors;?>starrr/dist/starrr.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="<?=$vendors;?>bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    
    <!-- PNotify -->
    <link href="<?=$vendors;?>pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="<?=$vendors;?>pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="<?=$vendors;?>pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    

    <!-- themme datepicker-->
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/ui-lightness/jquery-ui.css" />

    <!--modals y panels editings-->
    <link href="<?=$css_app;?>modal-header.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?=$build_css;?>custom.min.css" rel="stylesheet">
    <style>
    #lg_modal_res{
      width: 60% !important;
    }
  </style>
  </head>
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
                <img src="<?=$img_app;avatar($id);?>" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span><?=$alias;?></span>
                <h2><?=info_tbl_usuarios("_include", "2nom", $id);?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>&nbsp;</h3>
                <ul class="nav side-menu">
                  <li><a href=""><i class="fa fa-home"></i> Inicio </a></li>
                  <li><?=app1_data($id,'menu');?></li>
                  <li><?=app2_data($id,'menu');?></li>
                  <li><?=app3_data($id,'menu');?></li>

                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a>
                &nbsp;
              </a>
              <a>
                &nbsp;
              </a>
              <!--<a data-toggle="tooltip" data-placement="top" title="Configuración">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>-->
              <a data-toggle="tooltip" onclick="launchFullscreen(document.documentElement);" id="Full-Screen" data-placement="top" title="Patalla Completa">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <!--<a id="menu_toggle2" data-toggle="tooltip" data-placement="top" title="Ocultar menú">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>-->
              <a href="?cls=exit" data-toggle="tooltip" data-placement="top" title="Cerrar sesión">
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
                    <img src="<?=$img_app;avatar($id);?>" alt=""><?=info_tbl_usuarios("_include", "1nom", $id);?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <!--<li><a href="javascript:;"> Perfil</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-green pull-right">100%</span>
                        <span>Actividad</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Ayuda</a></li>-->
                    <li><a href="?cls=exit"><i class="fa fa-sign-out pull-right"></i> Salir</a></li>
                  </ul>
                </li>

                <!--<li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-green">3</span>
                  </a>
                  <ul id="div_student" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="< ?=$img_app;?>admin.png" alt="Profile Image" /></span>
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
                        <span class="image"><img src="< ?=$img_app?>admin.png" alt="Profile Image" /></span>
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
                        <span class="image"><img src="< ?=$img_app?>admin.png" alt="Profile Image" /></span>
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
                </li>-->
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
                  <h3>Bienvenido, <?=info_tbl_usuarios("_include", "2nom", $id);?></h3>
                </div>

              <!--<div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input class="form-control" placeholder="buscar..." type="text">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Ir!</button>
                    </span>
                  </div>
                </div>
              </div>-->
            </div>
          </div>
        </div>
          <!-- fin de la bienvenida -->
          <br>
          <div class="row">


            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="x_panel tile fixed_height_290">
                <div class="x_title">
                  <h2>Prueba Terman Merril</h2>
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
                  <div class=" col col-md-12 col-sm-12 col-xs-12 widget widget_tally_box">
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
                              <?=app1_data($id,'not');?>
                          </div>
                        </div>
                      </div>
                  <!--//-->
                </div>
              </div>
            </div>
            <!--Line Graph-->
            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="x_panel tile fixed_height_760 overflow_hidden">
                <div class="x_title">
                  <h2>Prueba de Factores</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div id="echart_line" style="height:350px;"></div>

                  <div class="col col-xs-12" align="center">
                    <?=app2_data($id,'not');?>
                  </div>
                </div>
              </div>
            </div>
            <!--/line Graph /-->

            <div class="col-md-4 col-sm-12 col-xs-12">
              <div class="x_panel tile fixed_height_520">
                <div class="x_title">
                  <h2>Test Orientación Vocacional</h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <div align="center">
                    <h2> <span class="fa fa-graduation-cap"></span> Orientación vocacional ITSE</h2>
                  </div>
                  <?=app3_data($id,"not");?>
                </div>
              </div>
            </div>


          </div>
        </div>
        <!-- /page content -->
        <!-- modal alert -->
            <div class="modal fade" id="finally">
              <div class="modal-dialog" id="sm-modal">
                <div class="modal-content modal-sm">
                  <div class="modal-header modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"><span class="fa fa-smile-o"></span><strong> Felicitaciones</strong> </h4>
                      </div>
                  <div class="modal-body">
                    <div class="col col-md-12">
                      <h3>Esta prueba ya está concluída.</h3>
                    </div>
                    <div>&nbsp;</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Salir</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- fin de modal alert -->
          <!-- modal resultado app1 -->
            <div class="modal fade" id="result">
              <div class="modal-dialog" id="md-modal">
                <div class="modal-content modal-md">
                  <div class="modal-header modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"> <span class="fa fa-cogs"></span> <strong> Mi Resultado</strong></h4>
                      </div>
                  <div class="modal-body">
                    <div class="col col-md-12" id="res_alumno">
                    </div>
                    <div>&nbsp;</div>
                    <div class="modal-footer">
                      <!--<button type="button" class="btn btn-default btn-sm" id="imprimir_res_app1" onClick="javascript:void(0)">Imprimir <span class="fa fa-print"></span></button>
                      --><button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Salir</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- fin de modal resultado app1 -->
          <!-- modal resultado app3 -->
            <div class="modal fade" id="result_app3">
              <div class="modal-dialog" id="lg_modal_res">
                <div class="modal-content modal-md">
                  <div class="modal-header modal-header-success">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel"> <span class="fa fa-graduation-cap"></span> <strong> Mi Vocacion</strong></h4>
                      </div>
                  <div class="modal-body">
                    <div class="col col-md-12" id="imprimir_panel">
                      <div class="panel-group" aling="center">
                        <table width="100%">
                          <tr>
                            <td width="33%"><div align="left"><img src="assets/bootstrap/images/logo.png" class="img-responsive" width="160" height="80"></div></td>
                            <td width="33%"><div align="center"><strong>INSTITUTO TECNOLÓGICO SUPERIOR DE ESCÁRCEGA<br>Resultados del test Orinetación Vocacional</strong></div></td>
                            <td width="33%"><div align="right"><img src="assets/bootstrap/images/itse.png" class="img-responsive" width="160" height="75"></div></td>
                          </tr>
                        </table>  
                      </div>
                    
                      <div class="col col-md-12" id="instruccion">
                      </div>
                    </div>
                    <div>&nbsp;</div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default btn-sm" id="imprimir_res" onClick="javascript:void(0)">Imprimir <span class="fa fa-print"></span></button>
                      <button type="button" class="btn btn-warning btn-sm" data-dismiss="modal">Salir</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- fin de modal resultado app3 -->
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Sistemas tutorias <a href="">ITSE</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?=$vendors;?>jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?=$vendors;?>bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?=$vendors;?>fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?=$vendors;?>nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?=$vendors;?>Chart.js/dist/Chart.min.js"></script>
    <!-- morris.js -->
    <script src="<?=$vendors;?>raphael/raphael.min.js"></script>
    <script src="<?=$vendors;?>morris.js/morris.min.js"></script>
    <!-- ECharts -->
    <script src="<?=$vendors;?>echarts/dist/echarts.min.js"></script>
    <script src="<?=$vendors;?>echarts/map/js/world.js"></script>
    <!-- gauge.js -->
    <script src="<?=$vendors;?>gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=$vendors;?>bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- PNotify -->
    <script src="<?=$vendors;?>pnotify/dist/pnotify.js"></script>
    <script src="<?=$vendors;?>pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?=$vendors;?>pnotify/dist/pnotify.nonblock.js"></script>
    <!-- iCheck -->
    <script src="<?=$vendors;?>iCheck/icheck.min.js"></script>

    <!-- jQuery Smart Wizard -->
    <script src="assets/vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=$build_js;?>custom.min.js"></script>

        <!--print area-->
    <script src="<?=$js_app;?>jquery.PrintArea.js"></script> 

    <!-- navigation apps-->
    <script src="<?=$js_app;?>navigation_app.js"></script> 
    <script src="<?=$js_app;?>jquery.validate.js"></script> }

    <script>
    $(document).ready(function(){
        $("#imprimir_res").click(function(){
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("div#imprimir_panel").printArea(options);
        });
        /*$("#imprimir_res_app1").click(function(){
            var mode = 'iframe'; //popup
            var close = mode == "popup";
            var options = { mode : mode, popClose : close};
            $("div#res_alumno").printArea(options);
        });*/
    });
    </script>

    <!-- PNotify -->
    <script>
      //$(document).ready(function() {
        function Welcome_alert () {
          // body...
        //}
        new PNotify({
          title: "Nota: ",
          type: "success",
          text: "Bienvenido, <?=info_tbl_usuarios('_include', '1nom', $id);?> a continuación podrás tener acceso a los siguientes módulos",
          nonblock: {
              nonblock: false
          },
          addclass: 'dark',
          styling: 'bootstrap3',
          hide: true,
          before_close: function(PNotify) {
            PNotify.update({
              title: PNotify.options.title + " - Enjoy your Stay",
              before_close: true
            });

            PNotify.queueRemove();

            return false;
          }

        });

      };
    </script>
    <!-- /PNotify -->

    <?php
    $sessiones = alert_welcome($id,"true");
      if ($sessiones>=1) {
        alert_welcome($id, "false");
        ?>
        <script>
          $(document).ready(function(){
            Welcome_alert ();
          });
        </script>
        <?php
      }
   ?>

    <!--FullScreen-->
<script>
// Find the right method, call on correct element
function launchFullscreen(element) {
  if(element.requestFullscreen) {
    element.requestFullscreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullscreen) {
    element.webkitRequestFullscreen();
  } else if(element.msRequestFullscreen) {
    element.msRequestFullscreen();
  }
}
// Add different events for fullscreen
</script>
   <script>
     var theme = {
          color: [
              '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
              '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },

          dataZoom: {
              dataBackgroundColor: '#eee',
              fillerColor: 'rgba(64,136,41,0.2)',
              handleColor: '#408829'
          },
          grid: {
              borderWidth: 0
          },

          categoryAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },

          valueAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitArea: {
                  show: true,
                  areaStyle: {
                      color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },
          timeline: {
              lineStyle: {
                  color: '#408829'
              },
              controlStyle: {
                  normal: {color: '#408829'},
                  emphasis: {color: '#408829'}
              }
          },

          k: {
              itemStyle: {
                  normal: {
                      color: '#68a54a',
                      color0: '#a9cba2',
                      lineStyle: {
                          width: 1,
                          color: '#408829',
                          color0: '#86b379'
                      }
                  }
              }
          },
          map: {
              itemStyle: {
                  normal: {
                      areaStyle: {
                          color: '#ddd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  },
                  emphasis: {
                      areaStyle: {
                          color: '#99d2dd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  }
              }
          },
          force: {
              itemStyle: {
                  normal: {
                      linkStyle: {
                          strokeColor: '#408829'
                      }
                  }
              }
          },
          chord: {
              padding: 4,
              itemStyle: {
                  normal: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  },
                  emphasis: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  }
              }
          },
          gauge: {
              startAngle: 225,
              endAngle: -45,
              axisLine: {
                  show: true,
                  lineStyle: {
                      color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                      width: 8
                  }
              },
              axisTick: {
                  splitNumber: 10,
                  length: 12,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              axisLabel: {
                  textStyle: {
                      color: 'auto'
                  }
              },
              splitLine: {
                  length: 18,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              pointer: {
                  length: '90%',
                  color: 'auto'
              },
              title: {
                  textStyle: {
                      color: '#333'
                  }
              },
              detail: {
                  textStyle: {
                      color: 'auto'
                  }
              }
          },
          textStyle: {
              fontFamily: 'Arial, Verdana, sans-serif'
          }
      };



   var echartLine = echarts.init(document.getElementById('echart_line'), theme);

      echartLine.setOption({
        title: {
          text: 'Puntuación',
          subtext: 'Puntos'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          x: 220,
          y: 40,
          data: ['Intent', 'Obj. Optenido', 'Obj. Deseado']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              title: {
                line: 'Line',
                bar: 'Bar',
                stack: 'Stack',
                tiled: 'Tiled'
              },
              type: ['line', 'bar', 'stack', 'tiled']
            },
            restore: {
              show: true,
              title: "Restaurar"
            },
            saveAsImage: {
              show: true,
              title: "Guardar Imagen"
            }
          }
        },
        calculable: true,
        xAxis: [{
          type: 'category',
          boundaryGap: false,
          data: ['A', 'B', 'C', 'E', 'F', 'G', 'H', 'I', 'L', 'M', 'N', 'O', 'Q1', 'Q2', 'Q3', 'Q4']
        }],
        yAxis: [{
          type: 'value'
        }],
        series: [{
          name: 'Obj. Deseado',
          type: 'line',
          smooth: true,
          itemStyle: {
            normal: {
              areaStyle: {
                type: 'default'
              }
            }
          },data: [<?=gfactoresResultados($id, '0');?>]
          
        }, {
          name: 'Obj. Optenido',
          type: 'line',
          smooth: true,
          itemStyle: {
            normal: {
              areaStyle: {
                type: 'default'
              }
            }
          },data: [<?=gfactoresResultados($id, '1');?>]
          
        }]
      });

   </script>
   
  </body>
</html>
