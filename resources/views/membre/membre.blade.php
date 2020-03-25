   @extends('welcome')
    @section('content')
      <div style="text-align: center; ">
    <strong style="color:green;">
                <?php
                $message=Session::get('message');
                    if ($message){
                        echo $message;
                        session::put('message', null);
                    }
                ?></strong></div>
   <div style="text-align: center; ">
    <strong style="color:red;">
                <?php
                $message=Session::get('message1');
                    if ($message){
                        echo $message;
                        session::put('message1', null);
                    }
                ?></strong></div>
   <div class="container-fluid">

       
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
               <div class="pull-right m-t-n-xs" >
                          <a data-toggle="modal" class="btn btn-primary" href="#acceuil"><i class="fa fa-user-plus"></i> Nouveau 

                            </a></div>
                              <div style="text-align: center; ">
              <h6 class="m-0 font-weight-bold text-primary">Liste des Membres du Club Informatique Geeks</h6></div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                   
                      <th>prenom</th>
                      <th>nom</th>
                      <th>sexe</th>
                      <th>Niveau</th>
                      <th>Date inscrit</th>
                      <th>statut</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>prenom</th>
                        <th>nom</th>
                       <th>sexe</th>
                      <th>Niveau</th>
                      <th>Date inscrit</th>
                      <th>statut</th>
                      <th>action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($membre as $v_product)   
                    <tr>
                       <td>{{$v_product->prenom}}</td>
                       <td>{{$v_product->nom}}</td>
                       <td>{{$v_product->sexe}}</td>
                         <td>{{$v_product->niveau}}</td>
                         <td>{{(new DateTime($v_product->date_inscrit))->format('d/m/Y')}}</td>
                    <td class="center">
                                @if($v_product->statusM==1)
                                   <span class="label label-primary"><div style="color: green">active</div></span>
                                @else
                                    <span class="label label-default"><div style="color: red">unactive</div></span>
                                @endif
                            </td>
                       <td>
                         @if($v_product->statusM==1)
                                    <a class="btn btn-default btn-xs" href="{{URL::to('/unactive_membre/'.$v_product->id)}}">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>
                                @else
                                    <a class="btn btn-default btn-xs" href="{{URL::to('/active_membre/'.$v_product->id)}}">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>
                                @endif
                           <a class="tn-xs-1" href="{{URL::to('/delete_membre/'.$v_product->id)}}" id="delete">
                          <i class="fa fa-trash"></i></a>
                       
                         <a class="btn btn-white btn-xs" href="{{URL::to('/edit_membre/'.$v_product->id)}}" >
                        <i class="fa fa-eye"></i>
                        </a>
                          <a class="btn btn-white btn-xs" href="{{URL::to('/detail_membre/'.$v_product->id)}}" >
                        <i class="fa fa-eye"></i>
                        </a>
                      </td>

                    </tr>
                     @endforeach
                  
                   
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
    <div class="modal fade" id="acceuil" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Formulaire de Membre de club</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
       <form method="post" class="form-validate" action="{{URL::to('/save_membre')}}" enctype="multipart/form-data">                  {{csrf_field()}}
         <div class="row">                                             
         <div class="col-sm-6 col-xs-12">
         <label>prenom <strong style="color:red;">* </strong> </label>
         <input type="text" name="prenom" placeholder="Prenom" class="form-control" required="true">
        </div>
         <div class="col-sm-6 col-xs-12">
         <label>nom <strong style="color:red;">* </strong> </label>
         <input type="text" name="nom" placeholder="Nom" class="form-control" required="true">
        </div>
       <div class="col-sm-6 col-xs-12">
          <label>sexe <strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="sexe">
          <option></option>
          <option value="Masculin">Masculin</option>
          <option value="Feminin">Feminin</option>
        </select>
        </div>
        <div class="col-sm-6 col-xs-12">
         <label>adresse <strong style="color:red;">* </strong> </label>
         <input type="text" name="adresse" placeholder="adresse" class="form-control" required="true">
        </div>
        <div class="col-sm-6 col-xs-12">
         <label>telephone <strong style="color:red;">* </strong> </label>
         <input type="number" name="telephone" placeholder="telephone" class="form-control" required="true">
        </div>
         <div class="col-sm-6 col-xs-12">
         <label>photo <strong style="color:red;">* </strong> </label>
         <input type="file" name="image" placeholder="" class="form-control" required="true">
        </div>
         <div class="col-sm-6 col-xs-12">
         <label>email <strong style="color:red;">* </strong> </label>
         <input type="email" name="email" placeholder="email" class="form-control" required="true">
        </div>
          <div class="col-sm-6 col-xs-12">
         <label>date incrit <strong style="color:red;">* </strong> </label>
         <input type="date" name="date_inscrit" placeholder="" class="form-control" required="true">
        </div>
      
      
        <div class="col-sm-6 col-xs-12">
          <label>Niveau<strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="niveau">
          <option></option>
          <option value="L1 Informatique">L1 Informatique</option>
          <option value="L2 Informatique">L2 Informatique</option>
          <option value="L3 Informatique">L3 Informatique</option>
          <option value="L1 Mastter">L1 Master</option>
          <option value="L2 Master">L2 Master</option>
          <option value="L1,l2 Informatique">L1,L2 Informatique</option>
          <option value="L1,l2,l3 Informatique">L1,L2,l3 Informatique</option>
           <option value="aucune">aucune</option>
        </select>
        </div>  
           <div class="col-sm-6 col-xs-12">
          <label>profile <strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="profile">
          <option></option>
          <option value="Membre">Membre</option>
          <option value=" president">President(e)</option>
          <option value=" vice-president">Vice-President(e)</option>
           <option value=" secretaire">Secretaire</option>
            <option value=" tresorerie">Tresorerie</option>
             <option value=" resp.communication">Resp. Communication</option>
             <option value=" Resp.pedagogie">Resp. Pedagogie</option>
             <option value=" Parrain">Parrain</option>
             <option value=" DG">DG</option>
              <option value=" DE">DE</option>
             <option value=" Chef de Departement">Chef Departement</option>
        </select>
        </div>  
          <div class="col-sm-6 col-xs-12">
          <label>Droit  au Menu<strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="droit">
          <option></option>
          <option value="1">aucune</option>
          <option value="2">Tous les menus</option>
          <option value="3">finance</option>
          <option value="4">pedagogie</option>
          <option value="5">secretariat</option>
          <option value="6">communication</option>
        </select>
        </div>  
           <div class="col-sm-6 col-xs-12">
          <label>Droit aux actions <strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="action">
          <option></option>
          <option value=" 1 ">tous les droits</option>
          <option value=" 2">Ajout,editer</option>
          <option value="3">ajout,detail</option>
           <option value="4">ajout,editer,detaill</option>
            <option value=" 5">ajouter</option>
          
        </select>
        </div>                                           
        </div>
        <br>                                  
        <div class="modal-footer">
       <input type="reset" class="btn btn-default"  value="Anuller"></input>
          <input type="submit" class="btn btn-primary"  value="enregistrer"></input>
           </form>
        </div>
      </div>
    </div>
  </div>

      @endsection