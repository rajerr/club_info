   @extends('welcome')
    @section('content')

      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Detail D'Activite</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
         <form method="post" class="form-validate" action="{{url('/modifier_acceuil',$product_info->id) }}" enctype="multipart/form-data">
       {{csrf_field()}}
         <div class="row">                                             
         <div class="col-sm-8 col-xs-12">
         <label> <strong style="color:black;"> titre</strong> </label> :
        
         {{$product_info->titre}}
         
        </div>
        
      
         <div class="col-sm-12 col-xs-12">
            <label><strong style="color:black;"> <center>contenus</center>  </strong> </label><br>
           <div style="text-align: justify;">
           {{$product_info->contenu}}
           </div>
           <br>
        <strong style="color:black;">posté:</strong>
         {{(new DateTime($product_info->date))->format('d/m/Y')}}
                       {{(new DateTime($product_info->date))->format('H:i:s')}}
        </div>
                                                      
        </div>
        <br>                                  
        <div class="modal-footer">
       <a href="{{url('/activite')}}" class="btn btn-default"  value="retourner">Retour</a>
          <input type="submit" class="btn btn-primary"  value="imprimer"></input>
           </form>
        </div>
      </div>
    </div>
 @endsection