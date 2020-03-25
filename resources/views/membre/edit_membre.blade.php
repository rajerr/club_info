   @extends('welcome')
    @section('content')

      <div class="modal-content">
      
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Editer Membre</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
         <form method="post" class="form-validate" action="{{url('/modifier_membre',$product_info->id) }}" enctype="multipart/form-data">
       {{csrf_field()}}
         <div class="row">                                             
      
                                        
       <div class="col-sm-6 col-xs-12">
         <label>prenom <strong style="color:red;">* </strong> </label>
         <input type="text" name="prenom" value="{{$product_info->prenom}}" class="form-control" >
        </div>
         <div class="col-sm-6 col-xs-12">
         <label>nom <strong style="color:red;">* </strong> </label>
         <input type="text" name="nom" value="{{$product_info->nom}}"  class="form-control" >
        </div>
       <div class="col-sm-6 col-xs-12">
          <label>sexe <strong style="color:red;">* </strong> </label>
        <select class="form-control"  name="sexe">
          <option>{{$product_info->sexe}} </option>
          <option value="Masculin">Masculin</option>
          <option value="Feminin">Feminin</option>
        </select>
        </div>

        <div class="col-sm-6 col-xs-12">
         <label>telephone <strong style="color:red;">* </strong> </label>
         <input type="number" name="telephone" value="{{$product_info->telephone}}" class="form-control">
        </div>
      
         <div class="col-sm-6 col-xs-12">
         <label>email <strong style="color:red;">* </strong> </label>
         <input type="email" name="email" value="{{$product_info->email}}"  class="form-control" >
        </div>
          <div class="col-sm-6 col-xs-12">
         <label>date incrit <strong style="color:red;">* </strong> </label>
         <input type="date" name="date_inscrit" value="{{$product_info->date_inscrit}}"   class="form-control" >
        </div><div class="col-sm-6 col-xs-12">
          <label>Niveau<strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="niveau">
          <option>{{$product_info->niveau}} </option>
          <option value="L1 Informatique">Licence 1 </option>
          <option value="L2 Informatique">Licence 2 </option>
          <option value="L3 Informatique">Licence 3 </option>
          <option value="L1 Mastter">L1 Master</option>
          <option value="L2 Master">L2 Master</option>
          <option value="L1,l2 Informatique">L1,L2 Informatique</option>
          <option value="L1,l2,l3 Informatique">L1,L2,l3 Informatique</option>
        </select>
        </div>  
           <div class="col-sm-6 col-xs-12">
          <label>profile <strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="profile">
          <option>{{$product_info->profile}} </option>
          <option value="Membre"> Membre</option>
          <option value=" president">President(e)</option>
          <option value=" vice-presidente">Vice-president(e)</option>
           <option value=" secretaire">Secretaire</option>
            <option value=" tresorerie">Tresorerie</option>
             <option value=" resp.communication">Resp.communication</option>\
            <option value=" Resp.pedagogie">Resp.pedagogie</option>
             <option value=" Parrain">Parrain</option>
        </select>
        </div> <div class="col-sm-6 col-xs-12">
          <label>Droit  au Menu<strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="droit">
          <option>{{$product_info->droit}}</option>
          <option value="1">aucune</option>
          <option value="2">Tous les menus</option>
          <option value="3">Finance</option>
          <option value="4">Pedagogie</option>
          <option value="5">Secretariat</option>
          <option value="6">Communication</option>
        </select>
        </div>  
           <div class="col-sm-6 col-xs-12">
          <label>Droit aux actions <strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="action">
          <option>{{$product_info->action}}</option>
          <option value=" 1 ">tous les droits</option>
          <option value=" 2">Ajout,editer</option>
          <option value="3">ajout,detail</option>
           <option value="4">ajout,editer,detaill</option>
            <option value=" 5">ajouter</option>
          
        </select>
        </div>   
           <div class="col-sm-6 col-xs-12">
         <label>photo <strong style="color:red;">* </strong> </label>
         <input type="file" name="image"  class="form-control" >
         <img src="{{URL::to($product_info->image)}}" style="height: 50px; width: 50px;">
        </div>
           <div class="modal-footer">
       <a href="{{URL::to('/membre')}}" class="btn btn-default" >Retour</a> 
          <input type="submit" class="btn btn-primary"  value="modifier"></input>
           </form>
        </div>  
           </form>
        </div>
      </div>
    </div>
 @endsection