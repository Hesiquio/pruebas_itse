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
    <!-- gauge.js -->
    <script src="<?=$vendors;?>gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?=$vendors;?>bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- Flot -->
    <script src="<?=$vendors;?>Flot/jquery.flot.js"></script>
    <script src="<?=$vendors;?>Flot/jquery.flot.pie.js"></script>
    <script src="<?=$vendors;?>Flot/jquery.flot.time.js"></script>
    <script src="<?=$vendors;?>Flot/jquery.flot.stack.js"></script>
    <script src="<?=$vendors;?>Flot/jquery.flot.resize.js"></script>
    <!-- PNotify -->
    <script src="<?=$vendors;?>pnotify/dist/pnotify.js"></script>
    <script src="<?=$vendors;?>pnotify/dist/pnotify.buttons.js"></script>
    <script src="<?=$vendors;?>pnotify/dist/pnotify.nonblock.js"></script>
    <!-- iCheck -->
    <script src="<?=$vendors;?>iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?=$build_js;?>custom.min.js"></script>

    <!-- navigation apps-->
    <script src="<?=$js_app;?>navigation_app.js"></script> 
    <script src="<?=$js_app;?>jquery.validate.js"></script> 

    <!-- PNotify -->
    <script>
      $(document).ready(function() {
        new PNotify({
          title: "Nota: ",
          type: "success",
          text: "Bienvenido, <?=$_SESSION['alias_us']?> a continuación podrás tener acceso a los siguientes módulos",
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

      });
    </script>
    <!-- /PNotify -->
    <!-- Doughnut Chart -->
    <script>
      $(document).ready(function(){
        var options = {
          legend: false,
          responsive: false
        };

        new Chart(document.getElementById("canvas1"), {
          type: 'doughnut',
          tooltipFillColor: "rgba(51, 51, 51, 0.55)",
          data: {
            labels: [
              "Symbian",
              "Blackberry",
              "Other",
              "Android",
              "IOS"
            ],
            datasets: [{
              data: [15, 20, 30, 10, 30],
              backgroundColor: [
                "#BDC3C7",
                "#9B59B6",
                "#E74C3C",
                "#26B99A",
                "#3498DB"
              ],
              hoverBackgroundColor: [
                "#CFD4D8",
                "#B370CF",
                "#E95E4F",
                "#36CAAB",
                "#49A9EA"
              ]
            }]
          },
          options: options
        });
      });
    </script>
    <!-- /Doughnut Chart -->
    
   

    <!-- gauge.js -->
    <script>
      var opts = {
          lines: 12,
          angle: 0,
          lineWidth: 0.4,
          pointer: {
              length: 0.75,
              strokeWidth: 0.042,
              color: '#1D212A'
          },
          limitMax: 'false',
          colorStart: '#1ABC9C',
          colorStop: '#1ABC9C',
          strokeColor: '#F0F3F3',
          generateGradient: true
      };
      var target = document.getElementById('foo'),
          gauge = new Gauge(target).setOptions(opts);

      gauge.maxValue = 6000;
      gauge.animationSpeed = 32;
      gauge.set(3200);
      gauge.setTextField(document.getElementById("gauge-text"));
    </script>
    <!-- /gauge.js -->

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
   
  </body>
</html>
