   @extends('welcome')
    @section('content')

      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Editer presentation</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
         <form method="post" class="form-validate" action="{{url('/modifier_present',$product_info->id) }}" enctype="multipart/form-data">
       {{csrf_field()}}
         <div class="row">                                             
         <div class="col-sm-8 col-xs-12">
         <label>titre <strong style="color:red;">* </strong> </label>
         <input type="text" name="titre" value="{{$product_info->titre}}" class="form-control" required="true">
        </div>
       
         <div class="col-sm-12 col-xs-12">
       <label>contenu<strong style="color:red;">* </strong> </label>
          <textarea   name="contenu" class="form-control " rows="10" cols="50" autocomplete="off" required="true">{{$product_info->contenu}}</textarea minlength="10" >
        </div>
                                                      
        </div>
        <br>                                  
        <div class="modal-footer">
       <input type="reset" class="btn btn-default"  value="Anuller"></input>
          <input type="submit" class="btn btn-primary"  value="Modifier"></input>
           </form>
        </div>
      </div>
    </div>
      

 @endsection