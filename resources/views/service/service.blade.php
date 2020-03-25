
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
              <h6 class="m-0 font-weight-bold text-primary">Liste des services  de club informatique</h6></div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                   
                      <th>id</th>
                      <th>libelli</th>
                      <th>description</th>
                      <th>fichier</th>
                      <th>Date ajout</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>id</th>
                      <th>libelli</th>
                      <th>description</th>
                      <th>fichier</th>
                      <th>Date ajout</th>
                      <th>action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($service as $v_product)   
                    <tr>
                       <td>{{$v_product->id}}</td>
                       <td>{{$v_product->libelli}}</td>
                       <td>{{$v_product->discription}}</td>
                       <td><a href="{{$v_product->fichier}}">{{$v_product->fichier}}</a></td>
                       <td>{{(new DateTime($v_product->dateajoutF))->format('d/m/Y')}}</td>
                  <td>
                           <a class="tn-xs-1" href="{{URL::to('/delete_service/'.$v_product->id)}}" id="delete">
                          <i class="fa fa-trash"></i></a>
                       
                         <a class="btn btn-white btn-xs" href="{{URL::to('/edit_service/'.$v_product->id)}}" >
                        <i class="fa fa-eye"></i>
                        </a>
                          <a class="btn btn-white btn-xs" href="{{URL::to('/detail_service/'.$v_product->id)}}" >
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
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Formulaire de service</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
       <form method="post" class="form-validate" action="{{URL::to('/save_service')}}" enctype="multipart/form-data">                  {{csrf_field()}}
         <div class="row">                                             
         <div class="col-sm-6 col-xs-12">
         <label>libelli <strong style="color:red;">* </strong> </label>
         <input type="text" name="libelli" placeholder="libelli" class="form-control" required="true">
        </div>
         <div class="col-sm-6 col-xs-12">
         <label>fichier joint <strong style="color:red;">* </strong> </label>
         <input type="file" name="fichier" placeholder="fichier" class="form-control" required="true">
        </div>
       <div class="col-sm-12 col-xs-12">
          <label>description<strong style="color:red;">* </strong> </label>
          <textarea   name="discription" class="form-control " rows="6" cols="5" autocomplete="off" required="true"></textarea minlength="10" >
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