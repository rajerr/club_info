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
<?php
 $membre2=DB::table('membres')
  ->where('statusM',1)
  ->where('profile','president')
 ->limit(1)
  ->get();

   $DG=DB::table('membres')
  ->where('statusM',0)
  ->where('profile','DG')
 ->limit(1)
  ->get();
   $DE=DB::table('membres')
  ->where('statusM',0)
  ->where('profile','DE')
 ->limit(1)
  ->get();
   $chdep=DB::table('membres')
  ->where('statusM',0)
  ->where('profile','Chef de Departement')
 ->limit(1)
  ->get();
  ?>
    <div id="inner-header">
      <img src="image/in.png" alt ="" />
    </div>
    <br>
      <section id="service" class="wow fadeInUp">
      <div class="container">
        <div class="row">
        <div class="col-md-3 col-sm-3">
          
        </div><!--/ End first service -->
        <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
            <div class="widget widget-tab">
              <ul class="nav nav-tabs">
                  <li class="active"><a href="#dg" data-toggle="tab">Directeur General</a></li>
                     <li class=""><a href="#dE" data-toggle="tab">Directeur des Etudes</a></li>
                      <li class=""><a href="#popular-tab" data-toggle="tab">Chef de Departemnt</a></li>
                      <li class=""><a href="#recent-tab" data-toggle="tab">President du Club</a></li>
                     
                    </ul>
                    <div class="tab-content">
                      
                      <div class="tab-pane " id="popular-tab">
                          <ul class="posts-list unstyled clearfix">
                            <li>
                              <div class="posts-thumb pull-left"> 
                                <a href="#">  @foreach($chdep as $dept)
                                  <img alt="img" src="{{URL::to($dept->image)}}">
                                </a> 
                              </div>
                              <div class="post-content">
                                  <h4 class="entry-title">
                                    <a href="#">M.{{$dept->prenom}} {{$dept->nom}}</a>
                                  </h4> 
                                  <p class="post-meta">
                              <span class="post-meta-author"><a href="#">{{$dept->profile}} D'ICAGI</a></span>
                              
                               </p> @endforeach
                              </div>
                              <div class="clearfix"></div>
                            </li><!-- 3rd post end-->
                          </ul>
                      </div><!-- Popular tabpan end -->
                      <div class="tab-pane active" id="dg">
                          <ul class="posts-list unstyled clearfix">
                            <li>
                              <div class="posts-thumb pull-left"> 
                                <a href="#">   @foreach($DG as $DG)
                                  <img alt="img" src="{{URL::to($DG->image)}}">
                                </a> 
                              </div>
                              <div class="post-content">
                                  <h4 class="entry-title">
                                    <a href="#">M.{{$DG->prenom}} {{$DG->nom}}</a>
                                  </h4>
                                 
                                  <p class="post-meta">
                              <span class="post-meta-author"><a href="#"> {{$DG->profile}} De ICAGI</a></span>
                              
                               </p> @endforeach
                              </div>
                              <div class="clearfix"></div>
                            </li><!-- 3rd post end-->
                          </ul>
                      </div><!-- Popular tabpan end -->
                      <div class="tab-pane " id="dE">
                          <ul class="posts-list unstyled clearfix">
                            <li>
                              <div class="posts-thumb pull-left"> 
                                <a href="#"> 
                                  @foreach($DE as $DE)
                                  <img alt="img" src="{{URL::to($DE->image)}}">
                                </a> 
                              </div>
                              <div class="post-content">
                                  <h4 class="entry-title">
                                    <a href="#">M.{{$DE->prenom}} {{$DE->nom}}</a>
                                  </h4>
                                  <p class="post-meta">
                              <span class="post-meta-author"><a href="#">{{$DE->profile}} De ICAGI</a></span>
                         
                               </p>   @endforeach
                              </div>
                              <div class="clearfix"></div>
                            </li><!-- 3rd post end-->
                          </ul>
                      </div><!-- Popular tabpan end -->

                      <div class="tab-pane" id="recent-tab">
                          <ul class="posts-list unstyled clearfix">
                            <li> @foreach($membre2 as $v_product)
                              <div class="posts-thumb pull-left"> 
                                <a href="#"> 
                                  <img width="100" height="100" src="{{URL::to($v_product->image)}}" alt="blog">
                                </a> 
                              </div>
                              <div class="post-content">  
                                  <h4 class="entry-title"><a href="#">
                                  
                                   {{$v_product->prenom}} {{$v_product->nom}}
                                   @endforeach
                                  </a>
                                  </h4>
                                  <p class="post-meta">
                        <span class="post-meta-author"><a href="#">{{$v_product->profile}} de club informatique D'ICAGI</a></span>
                   
                      </p>
                      <div>

                    <div class="clearfix"></div>
                  </li><!-- First post end-->
                   <li>
                </ul>
              </div><!-- Recent tabpan end -->          
    </section><!-- Service box end -->
<?php 
    $matiere=DB::table('matiere')
     ->where('classe','L1 informatique')
     ->where('semesttre','1 semestre')
     ->select('matiere.*')
      ->get();

 $matiere2=DB::table('matiere')
     ->where('classe','L1 informatique')
     ->where('semesttre','2 semestre')
     ->select('matiere.*')
      ->get();

       $l2=DB::table('matiere')
     ->where('classe','L2 informatique')
     ->where('semesttre','1 semestre')
     ->select('matiere.*')
      ->get();

      $l22=DB::table('matiere')
     ->where('classe','L2 informatique')
     ->where('semesttre','2 semestre')
     ->select('matiere.*')
      ->get();

        $l3=DB::table('matiere')
     ->where('classe','L3 informatique')
     ->where('semesttre','1 semestre')
     ->select('matiere.*')
      ->get();

      $l33=DB::table('matiere')
     ->where('classe','L3 informatique')
     ->where('semesttre','2 semestre')
     ->select('matiere.*')
      ->get();

       $m1=DB::table('matiere')
     ->where('classe','Master 1')
     ->where('semesttre','1 semestre')
     ->select('matiere.*')
      ->get();

      $m11=DB::table('matiere')
     ->where('classe','Master 1')
     ->where('semesttre','2 semestre')
     ->select('matiere.*')
      ->get();

       $m2=DB::table('matiere')
     ->where('classe','Master 2')
     ->where('semesttre','1 semestre')
     ->select('matiere.*')
      ->get();

      $m22=DB::table('matiere')
     ->where('classe','Master 2')
     ->where('semesttre','2 semestre')
     ->select('matiere.*')
      ->get();


       ?>


<section id="features">
      <div class="container">
        <div class="row">
            <center><h3><div style="color: blue"> <i> Nos matières </i></div></h3></center>
          <div class="col-md-12">
            <div class="featured-tab clearfix">
            <ul class="nav nav-tabs nav-stacked col-md-4">
                <li class="active">
                  <a class="animated fadeIn" href="#tab_a" data-toggle="tab">
                    <span class="tab-icon pull-left"></span>
                    <div class="tab-info">
                      <h3>Premiere Annees </h3>
                    <p>Les matiere de 1 semestre et 2 semestre</p>
                    </div>
                  </a>
                </li>
                <li>
                  <a class="animated fadeIn" href="#tab_b" data-toggle="tab">
                    <span class="tab-icon pull-left"></span>
                    <div class="tab-info">
                        <h3>Deuxieme Anneé</h3>
                      <p>Les matiere de 1 semestre et 2 semestre</p>
                    </div>
                  </a>
              </li>
              <li class="animated fadeIn">
                  <a href="#tab_c" data-toggle="tab">
                    <span class="tab-icon pull-left"></span>
                    <div class="tab-info">
                      <h3>Troisieme Annees </h3>
                      <p>Les matiere de 1 semestre et 2 semestre</p>
                    </div>
                  </a>
              </li>
              <li class="animated fadeIn">
                  <a href="#tab_d" data-toggle="tab">
                    <span class="tab-icon pull-left"></span>
                    <div class="tab-info">
                      <h3>Master1 </h3>
                      <p>Les matiere de 1 semestre et 2 semestre</p>
                    </div>
                  </a>
              </li>
              <li class="animated fadeIn">
                  <a href="#tab_e" data-toggle="tab">
                    <span class="tab-icon pull-left"></span>
                    <div class="tab-info">
                      <h3>Master2 </h3>
                      <p>Les matiere de 1 semestre et 2 semestre</p>
                    </div>
                  </a>
              </li>


            </ul>
            <div class="tab-content col-md-8">
                  <div class="tab-pane active animated fadeInRight" id="tab_a">
                      <img class="img-responsive pull-left"  alt="">
                       <h3>1 semestre</h3>
                        
                     <ul class="circle category-list clearfix">
                       @foreach($matiere as $v_product)
                      <li>{{$v_product->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul>
                     
                 <h3>2 semestre</h3>
                       <ul class="circle category-list clearfix">
                       @foreach($matiere2 as $v_product2)
                      <li>{{$v_product2->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul>
                  </div>

                  <div class="tab-pane animated fadeInLeft" id="tab_b">
                     
                       <h3>1 semestre</h3>
                      <ul class="circle category-list clearfix">
                       @foreach($l2 as $l2)
                      <li>{{$l2->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul> 
                     <h3>2 semestre</h3>
                       <ul class="circle category-list clearfix">
                       @foreach($l22 as $l22)
                      <li>{{$l22->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul>
                
                  </div>
                  <div class="tab-pane animated fadeIn" id="tab_c">
                     
                     <h3>1 semetre</h3>
                     <ul class="circle category-list clearfix">
                      @foreach($l3 as $l3)
                      <li>{{$l3->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul>
                    <h3>2 semetre</h3>
                       <ul class="circle category-list clearfix">
                       @foreach($l33 as $l33)
                      <li>{{$l33->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul>
                  </div>
                   <div class="tab-pane animated fadeIn" id="tab_d">
                     
                      <h3>1 semestre</h3>
                       <ul class="circle category-list clearfix">
                       @foreach($m1 as $m1)
                      <li>{{$m1->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul>
                   <h3> 2 semestre</h3>
                       <ul class="circle category-list clearfix">
                       @foreach($m11 as $m11)
                      <li>{{$m11->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul>
                  </div>
                   <div class="tab-pane animated fadeIn" id="tab_e">
                     
                      <h3>1 semestre</h3>
                      <ul class="circle category-list clearfix">
                       @foreach($m2 as $m2)
                      <li>{{$m2->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul>
                   <h3>2 semestre</h3>
                      <ul class="circle category-list clearfix">
                       @foreach($m22 as $m22)
                      <li>{{$m22->lib}}</a><span class="posts-count"></span></li>
                         @endforeach
                    </ul>
                  </div>
            </div><!-- tab content -->
            </div><!-- Featured tab end -->
          </div>
        </div><!-- Row end -->
      </div><!-- Container end -->
    </section> <!-- Features end -->
  <section id="service" class="wow fadeInUp">
      <div class="container">
        <div class="row">
          <center><h3><div style="color: blue"> <i> Les emploies du temps</i></div></h3></center>
        <div class="col-md-3 col-sm-3">
          
        </div><!--/ End first service -->
        <div class="col-lg-12 col-md-4 col-sm-12 col-xs-12">
            <div class="widget widget-tab">
              <ul class="nav nav-tabs">
                      <li class="active"><a href="#tab1" data-toggle="tab">1ere Année</a></li>
                      <li class=""><a href="#tab2" data-toggle="tab">2e Année</a></li>
                     <li class=""><a href="#tab3" data-toggle="tab">3e Année</a></li>
                     <li class=""><a href="#tab4" data-toggle="tab">1ere Année Master</a></li>
                     <li class=""><a href="#tab5" data-toggle="tab">2e Année Master</a></li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane active" id="tab1">
                          <ul class="posts-list unstyled clearfix">
                            <li>
                              <div class="posts-thumb pull-left"> 
                                
                              </div>

                              <div class="post-content">
                                  <h4 class="entry-title">
                                    <a href="#"><center> emploie du temps 1er semestre</center></a>
                                  </h4>
                                  <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lundi</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>

                                    <tr><td>1</td><td>html</td><td>html/css</td><td>Mathematiques</td><td>javascipt</td><td>langage c</td><td>samedi</td></tr>
                                    <tr><td>2</td><td>Anglais</td><td>system dexploitation</td><td>architecture des ordinateurs</td><td>javascipt</td><td>Algorithme</td><td>samedi</td></tr>
                                  </table>
                                  <br>
                                   <h4 class="entry-title">
                                    <a href="#"><center> emploie du temps 2e semestre</center></a>
                                  </h4>
                                   <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lundi</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>

                                    <tr><td>1</td><td>cisco</td><td>Merise1</td><td>electricite</td><td>javascipt</td><td>devellopement personnelle</td><td>Atelier</td></tr>
                                    <tr><td>2</td><td>Comptabilite</td><td>system dexploitation</td><td>Technique d'Expression</td><td>javascipt</td><td>langage c</td><td>Atelier</td></tr>
                                  </table>                             
                              </div>
                              <div class="clearfix"></div>
                            </li><!-- 3rd post end-->
                          </ul>
                      </div><!-- Popular tabpan end -->

                      <div class="tab-pane" id="tab2">
                           <h4 class="entry-title">
                                    <a href="#"><center> emploie du temps 1er semestre  </center></a>
                                  </h4>
                                  <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lundi</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>

                                    <tr><td>1</td><td>php</td><td>Merise2</td><td>C++</td><td>javascipt</td><td>Base de données</td><td>anglais</td></tr>
                                    <tr><td>2</td><td>RO</td><td>Droit Informatiique</td><td>Cisco</td><td>Linux</td><td>Comptabilite Analitique</td><td>...</td></tr>
                                  </table>
                                  <br>
                                   <h4 class="entry-title">
                                    <a href="#"><center> emploie du temps 2e semestre</center></a>
                                  </h4>
                                   <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lundi</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>

                                    <tr><td>1</td><td>Uml1</td><td>C++/poo</td><td>Base de données</td><td>php/poo</td><td>Anglais</td><td>Architecture Telecom</td></tr>
                                    <tr><td>2</td><td>RO</td><td>Traitement de Signal</td><td>DotNet</td><td>Inference Statistique</td><td>Cisco</td><td>/</td></tr>
                                  </table>
                              <div class="clearfix"></div>
                            </li><!-- First post end-->
                            <li>
                             
                          </ul>
                      </div><!-- Recent tabpan end -->

                      <div class="tab-pane" id="tab3">
                          <h4 class="entry-title">
                                    <a href="#"><center> emploie du temps 1er semestre  </center></a>
                                  </h4>
                                  <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lundi</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>

                                    <tr><td>1</td><td>java1</td><td>Administration Linux</td><td>Administration Windows Serveurs</td><td>Windev1</td><td>Methodologie</td><td>Administration SqlServer</td></tr>
                                    <tr><td>2</td><td>Windev1</td><td>UML2</td><td>/</td><td>Cisco</td><td>UML2</td><td>Entrepreunariat</td></tr>
                                  </table>
                                  <br>
                                   <h4 class="entry-title">
                                    <a href="#"><center> emploie du temps 2e semestre </center></a>
                                  </h4>
                                   <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lundi</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>

                                    <tr><td>1</td><td>Java2</td><td>Virtualisation/Cloud</td><td>Msproject</td><td>cisco</td><td>/</td><td>/</td></tr>
                                    <tr><td>2</td><td>Uml2</td><td>Administration Oracle</td><td>/</td><td>Cisco</td><td>Windev2</td><td>/</td></tr>
                                  </table>
                              <div class="clearfix"></div>
                            </li><!-- 2nd post end-->
                          </ul>
                      </div><!-- Comment tabpan end -->
                      <div class="tab-pane" id="tab4">
                           <h4 class="entry-title">
                                    <a href="#"><center> emploie du temps 1er semestre  </center></a>
                                  </h4>
                                  <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lundi</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>

                                    <tr><td>1</td><td>...</td><td>...</td><td>....</td><td>....</td><td>....</td><td>....</td></tr>
                                    <tr><td>2</td><td>....</td><td>....</td><td>.....</td><td>.....</td><td>....</td><td>.....</td></tr>
                                  </table>
                                  <br>
                                   <h4 class="entry-title">
                                    <a href="#"><center> emploie du temps 2e semestre </center></a>
                                  </h4>
                                   <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lund</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>
                                    <tr><td>1</td><td>...</td><td>...</td><td>....</td><td>....</td><td>....</td><td>....</td></tr>
                                    <tr><td>2</td><td>....</td><td>....</td><td>.....</td><td>.....</td><td>....</td><td>.....</td></tr>

                                                                      </table>
                              <div class="clearfix"></div>
                            </li><!-- First post end-->
                            <li>
                             
                          </ul>
                      </div>
                        <div class="tab-pane" id="tab5">
                           <h4 class="entry-title">
                                    <center> emploie du temps 1er semestre </center>
                                  </h4>
                                  <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lundi</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>

                                    <tr><td>1</td><td>...</td><td>...</td><td>....</td><td>....</td><td>....</td><td>....</td></tr>
                                    <tr><td>2</td><td>....</td><td>....</td><td>.....</td><td>.....</td><td>....</td><td>.....</td></tr>
                                  </table>
                                  <br>
                                   <h4 class="entry-title">
                                    <center> emploie du temps 2e semestre </center>
                                  </h4>
                                   <table width="100%" border="1">
                                    <tr><td><strong> N </strong></td><td><strong> lunde</strong></td><td><strong> mardi</td><td><strong> mercredi</td><td><strong> jeudi</td><td><strong> vendredi</td><td><strong> samedi</td></tr>

                                    <tr><td>1</td><td>...</td><td>...</td><td>....</td><td>....</td><td>....</td><td>....</td></tr>
                                    <tr><td>2</td><td>....</td><td>....</td><td>.....</td><td>.....</td><td>....</td><td>.....</td></tr>
                                  </table>
                              <div class="clearfix"></div>
                            </li><!-- First post end-->
                            <li>
                             
                          </ul>
                      </div>

                    </div><!-- Tab content end -->

            </div><!-- Tab widget end-->

            <!-- Blog category start -->
            
          </div><!-- Sidebar end -->
        </div><!-- Sidebar col end -->

    </section>
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
                         &copy; Plateforme 2019 CIG. <span>Developpé pour- <a href="#" target="_blank">CIG</a></span>
                        </div>
                    </div>
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer bottom end -->
    </section>
    <!-- Footer section end -->

    <!-- Javascript Files
    ================================================== -->
    <!-- Bootstrap jQuery -->
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

<!-- Mirrored from themewinter.com/html/dart/service.html by HTTrack Website Copier/3.x [XR&CO'2013], Wed, 11 Jun 2014 12:28:24 GMT -->
</html>