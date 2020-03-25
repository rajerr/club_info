<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewinter.com/html/dart/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 11 Jun 2014 12:23:36 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Club Informatique Geeks</title>
    <meta name="description" content="">    
    <meta name="author" content="">

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons
    ================================================== -->
    <link rel="icon" href="info/img/favicon/favicon-32x32.html" type="image/x-icon" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="info/img/favicon/favicon-144x144.html">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="info/img/favicon/favicon-72x72.html">
    <link rel="apple-touch-icon-precomposed" href="info/img/favicon/favicon-54x54.html">
    
    <!-- CSS
    ================================================== -->
    <!-- Bootstrap -->
   <link rel="stylesheet" href="{{asset('info/css/bootstrap.min.css')}}">
    <!-- Template styles-->
    <link rel="stylesheet" href="{{asset('info/css/style.css')}}">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{asset('info/css/font-awesome.min.css')}}">
    <!-- Animation -->
    <link rel="stylesheet" href="{{asset('info/css/animate.css')}}">
    <!-- Prettyphoto -->
    <link rel="stylesheet" href="{{asset('info/css/prettyPhoto.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('info/css/owl.carousel.css')}}">
    <!-- Bxslider -->
    <link rel="stylesheet" href="{{asset('info/css/jquery.bxslider.css')}}">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
	
<body>
   <div class="body-inner">
    <!-- Header start -->
    <header id="header" class="navbar-fixed-top main-nav" role="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!--/ Top info start -->
                    <div class="top-info">
                        <ul class="pull-right">
                            <li><i class="fa fa-phone"></i> Contact: (+221) 78 465 46 36</li>
                            <li><i class="fa fa-envelope"></i> clubinfo.geeks@gmail.com</li>
                            <!-- Social links -->
                            <li class="social-icon">
                                <a id="tooltip1" data-toggle="tooltip" data-placement="top" title="Twitter"  href="#">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a id="tooltip2" data-toggle="tooltip" data-placement="top" title="Facebook" href="#">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a id="tooltip3" href="#" data-toggle="tooltip" data-placement="top" title="Google+">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                                <a id="tooltip4" href="#" data-toggle="tooltip" data-placement="top" title="Dribble">
                                    <i class="fa fa-dribbble"></i>
                                </a>
                            </li><!-- Social links end-->
                        </ul>
                    </div><!--/ Top info end -->

                    <!-- Logo start -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="index-2.html">
                            <img class="img-responsive" width="170px" src="images/logo.png" alt="logo">
                        </a>                    
                    </div><!--/ Logo end -->

                    <nav class="collapse navbar-collapse clearfix" role="navigation">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"></li>
                        
                            <li><a href="{{URL::to('/')}}">Accueil</a></li>
                            <li><a href="{{URL::to('/about')}}">Qui sommes nous?</a></li>
                            <li><a href="{{URL::to('/activite1')}}">Activités</a></li>
                            <li class="dropdown">
                                <a href="{{URL::to('/membre1')}}" >Membres<i class="fa fa-caret-down"></i></a>
                            </li>
                           <li class="dropdown">
                                <a href="{{URL::to('/departement')}}"  >Département<i class="fa fa-caret-down"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="{{URL::to('/contact')}}">contact<i class="fa fa-caret-down"></i></a> 
                            </li>
                            <li><a href="{{URL::to('/login')}}">Login</a></li>
                           

                           
                        </ul>
                    </nav><!--/ Navigation end --> 
                    
                
                </div><!--/ Col end -->
            </div><!--/ Row end -->
        </div><!--/ Container end -->
    </header>
		<img src="image/as.jpg" alt ="" />
	</div>

	 <?php 
                 $mbr=DB::table('membres')
                              ->where('statusM',1)
                              ->select('membres.*')
                              ->paginate(12);

       ?>

	<!-- Team page start -->
<section id="clients">
    <div class="container">
      <div class="row">
        <div class="col-md-12 wow bounceIn">
          <div class='text-center'>
              <h2 class="title"><span>Les Membres du club informatique</span></h2>
          </div>
        </div>
      </div>
  @foreach($mbr as $membre)
                     <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 col">
                        <div class="team-wrap">
                            <div class="team-img">
                               <center>
                                  <a data-rel="prettyPhoto" href="{{URL::to($membre->image)}}"> 
                                           
                               <img  width="100" height="100" src="{{URL::to($membre->image)}}" class="img-circle" ></a>
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                      <center>
                                    <h4><div style="color: blue">{{$membre->prenom.' '. $membre->nom}}</div></h4>
                                    <p> {{$membre->profile}}<br>
                                     <i><strong>Membre depuis:</strong> {{(new DateTime($membre->date_inscrit))->format('Y')}}</i>

                                    </p>
                                    </center>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
  @endforeach
  </section>
		<section id="Team-page">
		<center>{{$mbr->links() }}	 </center>
	</section><!-- Team page end -->
        <div class="footer-bottom">
        		
            <div class="container">
                <div class="row">
                    <div class="col-md-5 wow fadeInLeft">
                        <ul class="footer-bottom-menu">
                            <li><p> <strong>Adresse :</strong> Liberté 6 extension, ecole ICAGI</p></li><br>
                            <li><p> <strong>Contact :</strong> 78 465 46 36</p></li><br>
                            <li><p> <strong>Mail :</strong> clubinfo.geeks@gmail.com</p></li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                            <a id="back-to-top" href="#" class="scroll-up back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
                                <img class="wow flipInY animated" width="200px"  src="image/logo.png" alt="">
                            </a>
                        </div>
                    <div class="col-md-5 wow fadeInRight">
                        <div class="copyright-info"><br><br><br>
                         &copy; Plateforme 2019 CIG. <span>Developpé par- <a href="#" target="_blank">CIG</a></span>
                        </div>
                    </div>
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer bottom end -->
    </section>

  <script type="text/javascript" src="info/js/jquery.js"></script>
  <!-- Bootstrap jQuery -->
  <script type="text/javascript" src="info/js/bootstrap.min.js"></script>
  <!-- Owl Carousel -->
  <script type="text/javascript" src="info/js/owl.carousel.js"></script>
  <!-- PrettyPhoto -->
  <script type="text/javascript" src="info/js/jquery.prettyPhoto.js"></script>
  <!-- Bxslider -->
  <script type="text/javascript" src="info/js/jquery.bxslider.min.js"></script>
  <!-- Isotope -->
  <script type="text/javascript" src="info/js/jquery.isotope.min.js"></script>
  <!-- Wow Animation -->
  <script type="text/javascript" src="info/js/wow.min.js"></script>
  <!-- SmoothScroll -->
  <script type="text/javascript" src="info/js/smoothscroll.js"></script>
  <!-- Animated Pie -->
  <script type="text/javascript" src="info/js/jquery.easy-pie-chart.js"></script>


  <!-- Template custom -->
  <script type="text/javascript" src="info/js/custom.js"></script>
</body>

<!-- Mirrored from themewinter.com/html/dart/team.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 11 Jun 2014 12:28:47 GMT -->
</html>