   @extends('welcome')
    @section('content')

      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Detail D'acceuil</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
         <form method="post" class="form-validate" action="{{url('/modifier_acceuil',$product_info->id) }}" enctype="multipart/form-data">
       {{csrf_field()}}
         <div class="row">                                             
         <div class="col-sm-8 col-xs-12">
         <label> <strong style="color:black;"> Titre</strong> </label> :
        
         {{$product_info->titre}}
        </div>
         <div style="text-align: right; ">
        <div class="col-sm-12 col-xs-12">
      
         <img src="{{URL::to($product_info->image)}}" style="height: 50px; width: 50px;">
        </div></div>
        <br>
          <div class="col-xs-12">
            <label><strong style="color:black;"> <center>Contenus</center>  </strong> </label><br>
           <div style="text-align: justify;">
           {{$product_info->contenu}}
           </div>
        </div>
                                                      
        </div>
        <br>                                  
        <div class="modal-footer">
       <a href="{{url('/acceuil ')}}" class="btn btn-default"  value="retourner">Retour</a>
          <input type="submit" class="btn btn-primary"  value="imprimer"></input>
           </form>
        </div>
      </div>
    </div>
 @endsection