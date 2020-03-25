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
    <link rel="icon" href="img/favicon/favicon-32x32.html" type="image/x-icon" />
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

    <!-- Slider start -->
      <section id="home"> 
        <!-- Carousel -->
        <div id="main-slide" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#main-slide" data-slide-to="0" class="active"></li>
                <li data-target="#main-slide" data-slide-to="1"></li>
                <li data-target="#main-slide" data-slide-to="2"></li>
            </ol><!--/ Indicators end-->

                   <link rel="stylesheet" href="{{asset('info/STYLE.css')}}">
             <?php 
             $image=DB::table('slide')
                                       ->where('publication_status',1)
                                       ->limit(5)
                                       ->get();
                                        ?>  
            <div class="carousel-inner">                                
                <div id="diaporama" > 
                <figure>  
                    @foreach($image as $v_slider)                 
                <img src="{{URL::to($v_slider->slider_image)}}"/>
                @endforeach
                </figure>
                </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="carousel-content">        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/.item-->
            </div>
        </div><!-- /carousel -->        
    </section>
      <?php $all_acceuil=DB::table('acceuil')
                              ->where('statut',1)
                              ->limit(1)
                              ->get();

       ?>
    <section id="features">
        <div class="container">
            @foreach($all_acceuil as $var)
            <div class="row">
                <div class="col-sm-4 wow fadeInLeft">
                    <div class="feature-image">
                        <img class="img-responsive" src="{{URL::to($var->image)}}"/>
                    </div>
                </div>

                <div class="col-sm-8 wow fadeInRight">
                    <div class="entry-header clearfix">
                                    <h2 class="entry-title">
                                        <a href="blog-item.html">{{$var->titre}}</a>
                                    </h2>
                                    
                                </div><!-- post heading end -->
                                <div class="entry-content">
                                    <div style="text-align:justify; ">
                                    <p> {{$var->contenu}}</p>
                                </div>
                                @endforeach
                </div><!-- Features right side end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section> <!-- Features end -->
<!-- Service box start -->
    <section id="service" class="wow fadeInUp">
        <div class="row">
                <div class="col-md-12 wow bounceIn">
                    <div class='text-center'>
                        <h2 class="title"><span>Raison de notre existance</span></h2>
                    </div>
                </div>

                <div class="skills wow fadeInUp">
                  <div class="col-md-3">
                    <div class="percentage easyPieChart" data-percent="85" data-delay="100"><span>85</span>%<canvas width="165" height="165"></canvas></div>
                    <small><strong> Integration</strong>
                    </small> </div>
                  <div class="col-md-3">
                    <div class="percentage easyPieChart" data-percent="34"><span>34</span>%<canvas width="165" height="165"></canvas></div>
                    <small><strong> Renforcement de capacité</strong> 
                    </small>     
                </div>
                  <div class="col-md-3">
                    <div class="percentage easyPieChart" data-percent="25"><span>25</span>%<canvas width="165" height="165"></canvas></div>
                    <small><strong> Echanges</strong> </small> </div>
                  <div class="col-md-3">
                    <div class="percentage easyPieChart" data-percent="50"><span>50</span>%<canvas width="165" height="165"></canvas></div>
                    <small><strong>Activités</strong></small> </div>
                </div>

            </div><!--/ Skills row end -->
    </section><!-- Service box end -->
 <?php 
  $galerie=DB::table('galerie')
    ->where('statusim',1)
    ->orderby('dateajout','Desc')
    ->limit(4)
    ->get();
     ?> 
    <!-- Portfolio start -->
    <section id="portfolio">
        <div class="container">
          <div class="row wow bounceIn">
                <div class="col-md-12">
                    <div class='text-center'>
                        <h2 class="title"><span>Activités Recentes</span></h2>
                    </div>
                </div>
          </div><!--/ Title row end -->
          <div class='row wow fadeInUp'>
            <div class='col-lg-12'>
              <div class="carousel slide" id="portfolio-carousel">
                <div class="carousel-inner">
                    <div class="item  active">
                        <div class="row">
                               @foreach($galerie as $varg)
                            <div class="col-md-3 portfolio online col-sm-3 col-xs-6 col">  
                                <div class="thumbnail">
                                   
                                    <a href="{{URL::to('activite1')}}" class="">
                                    <img height="260" width="260" src="{{URL::to($varg->image)}}" alt="portfolio"> 
                                </a>
                                </div>
                            </div>          
                               @endforeach
                        </div>
                    </div><!--/ Item active end -->
              </div><!-- Carousel end -->                          
            </div><!-- Main Col end -->
          </div><!--/ Main row end -->
        </div><!--/ Container end -->
    </section><!-- Portfolio end -->
 <?php 
   $membre=DB::table('membres')
  ->where('statusM',0)
  ->where('profile','Parrain')
 ->limit(1)
 ->get();
 $membre5=DB::table('membres')
->where('statusM',1)
->where('profile','Parrain')
->limit(1)
->get();
 $membre3=DB::table('membres')
    ->where('statusM',1)
    ->where('profile', 'vice-president')
    ->limit(1)
    ->get();
     ?> 
    <!-- Testimonial start-->
    <section id="testimonial" class="wow fadeInUp animated">
      <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class='text-center'>
                    <h2 class="title"><span>Les Responsables</span></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
                 @foreach($membre as $varM)
                <div class="item">
                  <div class="testimonial-thumb">
                   
                      <img class="img-circle" src="{{URL::to($varM->image)}}" alt="testimonial">
                  </div>
                  <div class="testimonial-content">
                    <h3 class="name">  {{$varM->prenom}} {{$varM->nom}} <span>{{$varM->profile}} du club</span></h3>  @endforeach
                 
                    <p class="testimonial-text">
                        <strong> Mon conseil :</strong>
                      Les mots du parrain
                    </p>
                  </div>
                </div>
<?php
 $membre2=DB::table('membres')
  ->where('statusM',1)
  ->where('profile','president')
 ->limit(1)
  ->get();
  ?><div class="item">
          <div class="testimonial-thumb">
                 @foreach($membre2 as $var2)
                   <img class="img-circle" src="{{URL::to($var2->image)}}" alt="testimonial">
                  </div>
                  <div class="testimonial-content">
                    <h3 class="name">{{$var2->prenom}} {{$var2->nom}}<span>{{$var2->profile}}  du club</span></h3>  @endforeach    
                    <p class="testimonial-text">
                        <strong> Mon conseil :</strong>
                      Soyez des fervents travailleurs car le seul chemin de la réussite c’est le travail, la détermination, le courage et la volonté. Croyez à ce que vous faites.  <strong>Un artiste disait</strong> ; « si vous croyez en vos rêves elles se réaliseront peut-être, mais si vous croyez en vous, vos rêves se réaliseront.
                    </p>
                  </div>  
                </div>
                <div class="item">
                  <div class="testimonial-thumb">
                     @foreach($membre3 as $var3)
                         <img class="img-circle" src="{{URL::to($var3->image)}}" alt="testimonial">
                  </div>  
                  <div class="testimonial-content">
                    <h3 class="name">{{$var3->prenom}} {{$var3->nom}}<span>{{$var3->profile}}</span></h3>
                    @endforeach
                    <p class="testimonial-text">
                        <strong> Mon conseil :</strong>
                      A remplir
                    </p>
                  </div>
                  
                </div>
            </div> 
            <!-- Navigation start -->
            <div class="customNavigation dart-carousel-controller">
                <a class="prev left">
                    <i class="fa fa-chevron-left"></i>
                </a>
                <a class="next right">
                  <i class="fa fa-chevron-right"></i>
                </a>
            </div><!--/ Navigation end -->
        </div><!--/ Main row end-->
      </div><!--/ Main container end-->
    </section><!-- Testimonial end-->
    <!-- Clients start -->
    <section id="clients">
     </section><!-- Clients end -->
    <!-- Main Footer start -->
        <!-- Footer bottom start -->
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
    <!-- Footer section end -->

    <!-- Javascript Files
    ================================================== -->
   <!-- initialize jQuery Library -->
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
    </div>
</body>

<!-- Mirrored from themewinter.com/html/dart/ by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 11 Jun 2014 12:27:06 GMT -->
</html>