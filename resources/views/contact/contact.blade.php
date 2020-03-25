<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewinter.com/html/dart/contact.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 11 Jun 2014 12:29:39 GMT -->
<head>

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <title>CIG</title>
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
    <div id="inner-header">
       <img src="image/moi.jpg" alt ="" />
    </div>

    <!-- Subpage title start -->
    
    <!-- Subpage title end -->

    <div class="gap-40"></div>


    <!-- Contact page start -->
    <section id="Contact-page">
        <div class="container">
            <div class="row">
    <div style="text-align: center; ">
    <strong style="color:green;">
                <?php
                $message=Session::get('message');
                    if ($message){
                        echo $message;
                        session::put('message', null);
                    }
                ?></strong></div>
                <!-- Map start here -->
                
                <!-- Map end here -->

                <!-- Contact form start -->
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="contact-form">
                        <h3>Nous Contactez</h3>
                           <form method="post" class="form-validate" action="{{URL::to('/save_contact')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Name</label>
                                    <input class="form-control" name="nom" id="name" placeholder="" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email" id="email" 
                                        placeholder="" type="email" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Sujet</label>
                                        <input class="form-control" name="sujet" id="subject" 
                                        placeholder="" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea class="form-control" name="message" id="message" placeholder="" rows="8" required></textarea>
                            </div>
                            <div><br>
                            <button class="btn btn-primary" type="submit">Envoyer Message</button> 
                            </div>
                        </form>
                    </div><!-- Contact form end --> 
                </div> <!-- Col end -->


                <!-- sidebar start -->
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="contact-info">
                    <h3>Contacts CLUB INFO GEEKS</h3>
                    <p><marquee><strong>POUR TOUTES INFORMATIONS? SUGGESTIONS, SOMMES DISPONIBLES POUR REPONDRE A VOS BESOINS</strong> </marquee></p>
                    <br>
                    <p><i class="fa fa-home"></i>  1102 , Liberté 6 extension, Dakar </p>
                    <p><i class="fa fa-phone"></i>  (+221) 78 465 46 36</p>
                    <p><i class="fa fa-envelope-o"></i>  clubinfo.geeks@gmail.com</p>
                    <p><i class="fa fa-globe"></i>  www.clubinfo-icagi.com</p>
                    </div>
                </div><!-- sidebar end -->
            </div><!--/ row end -->
        </div><!--/ container end -->
    </section>
    <!-- Faq page end -->
    
     <div class="col-xs-12">
                  <br>
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3858.7128139293477!2d-17.47390508550919!3d14.728821877871049!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xec10d533c2e7bc7%3A0xd4638a575a63fe05!2sICAGI!5e0!3m2!1sfr!2ssn!4v1563464999212!5m2!1sfr!2ssn" width="100%" height="400px" frameborder="0" style="border:0" allowfullscreen></iframe>
                       <!--  affichage de maps par java scripts 
                       <div id="map"></div>-->
                    </div>

    <div class="gap-40"></div>

    

        <!-- Footer bottom start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 wow fadeInLeft animated">
                        <ul class="footer-bottom-menu">
                                <li><p> <strong>Adresse :</strong> Liberté 6 extension, ecole ICAGI</p></li><br>
                                <li><p> <strong>Contact :</strong> 78 465 46 36</p></li><br>
                                <li><p> <strong>Mail :</strong> clubinfo.geeks@gmail.com</p></li>
                            </ul>
                    </div>
                    <div class="col-md-2">
                        <a id="back-to-top" href="#" class="scroll-up back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
                            <img class="wow flipInY animated" width="300px"  src="images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-5 wow fadeInRight animated">
                            <div class="copyright-info"><br><br><br>
                                &copy; Copyright 2019 CIG. <span>Designed &amp; developed by- <a href="#" target="_blank">... </a></span>
                              </div>
                    </div>
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer bottom end -->
    </section><!-- Footer section end -->    


    <!-- Javascript Files
    ================================================== -->
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
    <!-- Doc http://www.mkyong.com/google-maps/google-maps-api-hello-world-example/ -->

    <script type="text/javascript">
      $(function() {
        $("#map").gmap3({
          map:{
            options:{
              zoom: 14,
            }
          },
          getlatlng:{
            address:  "121 King Street, Melbourne Victoria 3000 Australia",
            callback: function(results) {
              if ( !results ) return;
              $(this).gmap3('get').setCenter(new google.maps.LatLng(results[0].geometry.location.lat(), results[0].geometry.location.lng()));
              $(this).gmap3({
                marker:{
                  latLng:results[0].geometry.location,
                  options:{
                        icon: new google.maps.MarkerImage(
                        "../../../gmap3.net/skin/gmap/magicshow.png",
                        new google.maps.Size(32, 37, "px", "px")
                        )
                    }
                }
              });
            }
          }

        });

        });
    </script>


    <!-- Template custom -->
    <script type="text/javascript" src="js/custom.js"></script>


</body>

<!-- Mirrored from themewinter.com/html/dart/contact.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 11 Jun 2014 12:29:42 GMT -->
</html>


