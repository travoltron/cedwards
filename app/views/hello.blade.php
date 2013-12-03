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
  </head>

  <body>

    <!-- Side Menu -->
    <a id="menu-toggle" href="#" class="btn btn-primary btn-lg toggle"><i class="fa fa-bars"></i></a>
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <a id="menu-close" href="#" class="btn btn-default btn-lg pull-left toggle"><i class="fa fa-times"></i></a>
        <li class="sidebar-brand"><a href="#top">Christen Edwards</a></li>
        <li><a href="#mywork">My Work</a></li>
        <li><a href="#resume">Resume</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div>
    <!-- /Side Menu -->
  
    <!-- Full Page Image Header Area -->
    <div id="top" class="header">
      <div class="vert-text">
        <h1>Christen Edwards</h1>
        <h3><em>Hair Stylist & Creative Artist</em></h3>
      </div>
    </div>
    <!-- /Full Page Image Header Area -->
  
    <!-- My Work -->
    <div id="mywork" class="intro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-md-offset-3 text-center">
            <h2>Previous Projects</h2>
          </div>
        </div>
        <div class="row">
          <div id="port-carousel" class="carousel slide col-md-8 col-md-offset-2 text-center" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              @for($i=0; $i < Portimg::all()->count(); $i++)
                <li data-target="#port-carousel" data-slide-to="{{$i}}"></li>
              @endfor
            </ol>

            <div class="carousel-inner">
              @foreach(Portimg::all() as $img)
                <div class="item active portimg text-center">
                  {{ HTML::image($img->image, $alt=NULL, $attribute = array('class'=>'center-img img-responsive') ) }}
                  <div class="carousel-caption">
                    <h3>Heading</h3>
                    <p>Desc</p>
                  </div>
                </div>
              @endforeach
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#port-carousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#port-carousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
          </div>
        </div>
        <h2 class="lead text-center"><a href="#resume">My Resume</a></h2>
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
          <h2 class="text-center">My Work Experience</h2>
          <div class="col-md-12">
            
            <table class="table">
              @foreach(Job::orderBy('date_start', 'desc')->get() as $job)
                <tr>
                  <td class="lead">{{ $job->showname }}</td>
                  <td class="lead">{{ $job->position }}</td>
                  <td class="lead">{{ $job->supervisor }}</td>
                  <td class="lead">{{ $job->date_start }} @if($job->date_start != $job->date_end) - {{ $job->date_end }} @endif</td>
                </tr>
              @endforeach
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
          <h1 class="text-center">Contact Me</h1>
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
            <p>Copyright &copy; Ben Warburton 2013</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- /Footer -->

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
        $("#menu-toggle").click(function(e) {
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