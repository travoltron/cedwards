<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Christen Edwards</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/stylish-portfolio.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="author" href="humans.txt" />
  </head>

  <body>

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-left toggle-sb toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand toggle toggle-sb"><a href="#top">Christen Edwards</a></li>
        <li><a class="toggle-sb" href="#mywork">Images</a></li>
        <li><a class="toggle-sb" href="#resume">Resume</a></li>
        <li><a class="toggle-sb" href="#contact">Contact</a></li>
      </ul>
    </div>
    <!-- /Side Menu -->
  
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <h1>Christen Edwards</h1>
        <h3><em>Hair Stylist & Fabricator</em></h3>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- My Work -->
    <div id="mywork" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">          
            @foreach(Portimg::all() as $img)
              <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2" style="display: inline-block;position:relative;overflow:hidden;">
                <div style="padding-top:100%;">
                  <div style="position: absolute;top: 0;bottom: 0;left: -30%;right: -30%;">
                    {{ HTML::image($img->image, $alt=NULL, $attribute = array('class' => 'modal-img', 'data-main' => $img->image, 'style' => 'cursor:pointer;') ) }}
                  </div>
                </div>
              </div>
            @endforeach
          </div>
        </div>
        <h2 class="lead text-center"><a href="#resume">Resume</a></h2>
      </div>
    </div>
    <!-- /My Work -->
  
    <!-- Callout -->
    <div class="callout">
      <div class="vert-text"></div>
    </div>
    <!-- /Callout -->

    <!-- Resume -->
    <div id="resume" class="resume">
      <div class="container">
        <div class="row">
          <h2 class="text-center">Resume</h2>
          <div class="col-md-12">
            
            <table class="table">
              <thead>
                <tr>
                  <th>Show</th>
                  <th>Position</th>
                  <th>Supervisor</th>
                  <th>Year</th>
              </thead>
              <tbody>
              @foreach(Job::orderBy('date_start', 'desc')->get() as $job)
                  <tr>
                    <td class="lead">{{ $job->showname }}</td>
                    <td class="lead">{{ $job->position }}</td>
                    <td class="lead">{{ $job->supervisor }}</td>
                    <td class="lead">{{ $job->date_start }} @if($job->date_start != $job->date_end) - {{ $job->date_end }} @endif</td>
                  </tr>
              @endforeach
                </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /Resume -->

    <!-- Callout -->
    <div class="callout">
      <div class="vert-text"></div>
    </div>
    <!-- /Callout -->

    <!-- Contact -->
    <div id="contact" class="contact">
      <div class="container">
        <div class="row">
          <h1 class="text-center">Contact</h1>
          <div class="col-md-6 col-md-offset-3 text-center">
            <address>
              <abbr title="Phone">P:</abbr> (607) 972-7099
            </address>

            <address>
              <a href="mailto:christen@christenedwards.com">christen@christenedwards.com</a>
            </address>
          </div>
        </div>
      </div>
    </div>
    <!-- /Contact -->

    
    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <div class="top-scroll">
              <a href="#top"><i class="fa fa-circle-arrow-up scroll fa-4x"></i></a>
            </div>
            <hr>
            <p>&copy;<a href="https://github.com/travoltron">travoltron</a> {{ date('Y') }}</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->
    <!-- Modal for images -->
    <div class="modal fade" id="img-modal">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <p class="text-center"><img id="img-target" src="" style="max-width:100%"></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/script.js"></script>

    <!-- Custom JavaScript for the Side Menu and Smooth Scrolling -->
    <script>
        $("#menu-close").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
        $(".toggle, .toggle-sb").click(function(e) {
            e.preventDefault();
            $("#sidebar-wrapper").toggleClass("active");
        });
    </script>
    <script>
      $(function() {
        $('a[href*=#]:not([href=#])').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
            || location.hostname == this.hostname) {

            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top
              }, 1000);
              return false;
            }
          }
        });
      });
    </script>

  </body>

</html>
