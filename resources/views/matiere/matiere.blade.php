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
              <h6 class="m-0 font-weight-bold text-primary">Liste des Matieres par classe et Semestre</h6></div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                     <th>lib</th>
                      <th>classe</th>
                      <th>semestre</th>
                      <th>statut</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    
                      <th>lib</th>
                      <th>classe</th>
                      <th>semestre</th>
                      <th>statut</th>
                      <th>action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($matiere as $v_product)   
                    <tr>
                   
                      <td>{{$v_product->lib}}</td>
                       <td>{{$v_product->classe}}</td>
                       <td>{{$v_product->semesttre}}</td>
                  
                    <td class="center">
                                @if($v_product->statusm==1)
                                   <span class="label label-primary"><div style="color: green">active</div></span>
                                @else
                                    <span class="label label-default"><div style="color: red">unactive</div></span>
                                @endif
                            </td>
                       <td>
                         @if($v_product->statusm==1)
                                    <a class="btn btn-default btn-xs" href="{{URL::to('/unactive_matiere/'.$v_product->id)}}">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>
                                @else
                                    <a class="btn btn-default btn-xs" href="{{URL::to('/active_matiere/'.$v_product->id)}}">
                                        <i class="fa fa-thumbs-up"></i>
                                    </a>
                                @endif
                           <a class="tn-xs-1" href="{{URL::to('/delete_matiere/'.$v_product->id)}}" id="delete">
                          <i class="fa fa-trash"></i></a>
                       
                         <a class="btn btn-white btn-xs" href="{{URL::to('/edit_matiere/'.$v_product->id)}}" >
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
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Formulaire de Matiere selon la classe</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
       <form method="post" class="form-validate" action="{{URL::to('/save_matiere')}}" enctype="multipart/form-data">                  {{csrf_field()}}
         <div class="row">                                             
         <div class="col-sm-12 col-xs-12">
         <label>libele Matiere <strong style="color:red;">* </strong> </label>
         <input type="text" name="lib" placeholder="libelli" class="form-control" required="true">
        </div>
      
      
        <div class="col-sm-12 col-xs-12">
          <label>classe <strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="classe">
          <option></option>
          <option value="L1 Informatique">Licence 1 </option>
          <option value="L2 Informatique">Licence 2 </option>
          <option value="L3 Informatique">Licence 3 </option>
          <option value="Master 1">Master 1</option>
          <option value="Master 2">Master 2</option>
        </select>
        </div>  
           <div class="col-sm-12 col-xs-12">
          <label>semestre <strong style="color:red;">* </strong> </label>
        <select class="form-control" required="true" name="semesttre">
          <option></option>
          <option value="1 semestre">1 semestre</option>
          <option value="2 semestre">2 semestre</option>
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