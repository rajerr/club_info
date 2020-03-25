   @extends('welcome')
    @section('content')

      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Detail de membre de club</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
         <form method="post" class="form-validate" action="{{url('/modifier_membre',$product_info->id) }}" enctype="multipart/form-data">
       {{csrf_field()}}
         <div class="row">                                             
       
     <div class="col-sm-6 col-xs-12">
         <label> <strong style="color:red;">Prenom</strong> </label>
         <div>{{$product_info->prenom}}</div>
        </div>
          <div class="col-sm-6 col-xs-12">
         <label><strong style="color:red;">Nom </strong> </label>
        <div> {{$product_info->nom}}</div>
        </div><div class="col-sm-6 col-xs-12">
        <label><strong style="color:red;">Telephone </strong> </label>
      
        <div> {{$product_info->telephone}} </div>
        </div>
        <div class="col-sm-6 col-xs-12">
        <label><strong style="color:red;">sexe </strong> </label>
      
        <div> {{$product_info->sexe}} </div>
        </div>


      
         <div class="col-sm-6 col-xs-12">
         <label> <strong style="color:red;">email</strong> </label>
         <div>{{$product_info->email}}</div>
        </div>
          <div class="col-sm-6 col-xs-12">
         <label><strong style="color:red;">date incrit </strong> </label>
        <div>{{(new DateTime($product_info->date_inscrit))->format('d/m/Y')}}</div>
        </div><div class="col-sm-6 col-xs-12">
        <label><strong style="color:red;">Niveau </strong> </label>
      
        <div>{{$product_info->niveau}} </div>
        </div>
          <div class="col-sm-6 col-xs-12">
          <label><strong style="color:red;">profile </strong> </label>
       
          <div>{{$product_info->profile}} </div>
         
        </div> 
           <div class="col-sm-6 col-xs-12">
         <label><strong style="color:red;">photo  </strong> </label>
      
         <div><img src="{{URL::to($product_info->image)}}" style="height: 90px; width: 80px;"></div>
        </div>
           <div class="modal-footer">
          <a href="{{url('/membre') }}"  class="btn btn-default"  >Retour</a> 
          <input type="submit" class="btn btn-primary"  value="imprimer"></input>
           </form>
        </div>  
           </form>
        </div>
      </div>
    </div>
 @endsection