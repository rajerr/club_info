   @extends('detail')
    @section('content')

    <!-- Subpage title end -->

    <div class="gap-40"></div>

    <!-- Service page start -->
    <section id="service-page">
           
<?php 
   
                 $all_slider=DB::table('galerie')
                  ->join('activites','id_activites', '=', 'activites.id')
                 ->where('statusim',1)
                 ->where('id_activites',$product_info->id)
                 ->get();


                 $commentaires=DB::table('commentaires')
                  ->join('activites','id_activites', '=', 'activites.id')
                 ->where('id_activites',$product_info->id)
                 ->get();
 
               ?>      
    </section><!-- Service page end -->
     <section id="features">
        <div class="container">
     
            <div class="row">
                <div class="col-sm-12 wow fadeInLeft">
                    <div class="feature-image">
                        
                    </div>
                </div>

                <div class="col-sm-12 wow fadeInRight">
                    <div class="entry-header clearfix">
                                    <h2 class="entry-title">
                                        <a href="blog-item.html">{{$product_info->titre}}</a>
                                    </h2>
                                    
                                </div><!-- post heading end -->
                                <div class="entry-content">
                                    <div style="text-align:justify; ">
                                    <p> {{$product_info->contenu}}</p>
                                </div>  <center>  
                           @foreach($all_slider as $v_product) 
                                        
                              <a data-rel="prettyPhoto" href="{{URL::to($v_product->image)}}"> 
                                         
                        <span class="service-icon pull-left"><img src="{{URL::to($v_product->image)}}" style="height: 150px; width: 250px;"></span></a>
                        

                           @endforeach
                     </center>
                </div><!-- Features right side end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
        <br> <br>
        <section id="service" class="wow fadeInUp">
    <div class='text-center'>
     <h2 class="title"><span>Les commentaires</span></h2>
 </div>
     @foreach($commentaires as $v_product1)
     <blockquote>
 	<i><div style="color: blue">{{$v_product1->nom}}</div><i><br> 
  <i> {{$v_product1->message}}</i><br> 
   <i><div style="color: black">
   	{{(new DateTime($v_product1->dateposte))->format('d/m/Y')}}
   {{(new DateTime($v_product1->dateposte))->format('H:i:s')}}</div><i>   
    </blockquote><br>
   @endforeach 
 </section>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="contact-form">
                       
                       <form method="post" class="form-validate" action="{{URL::to('/save_commetaire')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                         <div class="row">
                             
                                    <input class="form-control" name="id_activites" id="name" placeholder="" type="hidden" value="{{$product_info->id}}">
                                 
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Nom complet</label>
                                    <input class="form-control" name="nom" id="name" placeholder="" type="text" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" name="email" id="email" 
                                        placeholder="" type="email" required>
                                    </div>
                                </div> </div>

                            <div class="col-sm-12 col-xs-12">
                          <label>commentaire<strong style="color:red;">* </strong> </label>
         				 <textarea   name="message" class="form-control " rows="2" cols="5" autocomplete="off" required="true"></textarea minlength="10" >
        				</div>
                            <br> 
                              <div class="col-sm-12 col-xs-12">
                            <button class="btn btn-primary" type="submit">poster un commentaire</button> 
                            </div>
                            </div>
                        </form>
                    </div><!-- Contact form end --> 
                </div> <!-- Col end -->

    </section> <!-- Features end -->
           
 @endsection()