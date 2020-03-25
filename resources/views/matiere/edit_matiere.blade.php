   @extends('welcome')
    @section('content')

      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Editer Matiere</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
         <form method="post" class="form-validate" action="{{url('/modifier_matiere',$product_info->id) }}" enctype="multipart/form-data">
       {{csrf_field()}}
         <div class="row">                                             
          <div class="col-sm-12 col-xs-12">
         <label>libeli Matiere <strong style="color:red;">* </strong> </label>
         <input type="text" name="lib" placeholder="libelli" class="form-control" value="{{$product_info->lib}}">
        </div>
 
           <div class="col-sm-12 col-xs-12">
          <label>classe <strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="classe">
          <option value="{{$product_info->classe}}">{{$product_info->classe}}</option>
          <option value="L1 Informatique">L1 Informatique</option>
          <option value="L2 Informatique">L2 Informatique</option>
          <option value="L3 Informatique">L3 Informatique</option>
          <option value="L1 Mastter">L1 Master</option>
          <option value="L2 Master">L2 Master</option>
        </select>
        </div> 
           <div class="col-sm-12 col-xs-12">
          <label>semestre <strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="semesttre">
          <option value="{{$product_info->semesttre}}">{{$product_info->semesttre}}</option>
          <option value="1 semestre">1 semestre</option>
          <option value="2 semestre">2 semestre</option>
        </select>
        </div>                                             
      
                                                      
        </div>
        <br>                                  
        <div class="modal-footer">
       <a href="{{url('/matiere')}}" class="btn btn-default"  value="retourner">Retour</a>
          <input type="submit" class="btn btn-primary"  value="Modifier"></input>
           </form>
        </div>
      </div>
    </div>
 @endsection