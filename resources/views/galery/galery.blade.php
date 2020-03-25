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
                        session::put('message', null);
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
              <h6 class="m-0 font-weight-bold text-primary">Les galeries</h6></div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>image</th>
                      <th>date ajout</th>
                      <th>statut</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>id</th>
                      <th>image</th>
                      <th>date ajout</th>
                      <th>statut</th>
                      <th>action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                     
                       @foreach($galerie as $v_slider)
                 
                        <tr>
                            <td>{{ $v_slider->idg }}</td>
                            <td><img src="{{URL::to($v_slider->image)}}" style="height: 70px; width: 100px;"></td>
                             <td> {{(new DateTime($v_slider->dateajout))->format('d/m/Y')}}
                       {{(new DateTime($v_slider->dateajout))->format('H:i:s')}}</td>
                            <td class="center">
                                @if($v_slider->statusim==1)
                                    <span class="label label-success"><div style="color: green">Active</div> </span>
                                @else
                                    <span class="label label-danger"><div style="color: red">Inactive</div></span>
                                @endif
                            </td>

                            <td class="center">
                                @if($v_slider->statusim==1)
                                    <a  href="{{URL::to('/unactive_galery/'.$v_slider->idg)}}">
                                          <i class="fa fa-thumbs-up"></i>
                                    </a>
                                @else
                                    <a  href="{{URL::to('/active_galery/'.$v_slider->idg)}}">
                                          <i class="fa fa-thumbs-up"></i>
                                    </a>
                                @endif
                                
                              
                                  <a class="tn-xs-1" href="{{URL::to('/delete_galery/'.$v_slider->idg)}}" id="delete">
                          <i class="fa fa-trash"></i></a>
                              
                                   
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
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Formulaire de galerie</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
       <form method="post" class="form-validate" action="{{URL::to('/save_galery')}}" enctype="multipart/form-data">                  {{csrf_field()}}
         <div class="row">                                             
       
        <div class="col-sm-6 col-xs-12">
        <label>image<strong style="color:red;">* </strong> </label>
         <input type="file" name="image" placeholder="photo" class="form-control" required="true">
        </div>
        <div class="col-sm-6 col-xs-12">
          <label>Activité  <strong style="color:red;">* </strong> </label>
         <select  name="id_activites"  class="form-control" required="true">
        <option></option>
         <?php
         $activite=DB::table('activites')
         ->select('activites.*')
        ->orderby('date','desc')
         ->get();
           foreach ($activite as $v_product_info){?>
         <option value="{{$v_product_info->id}}">{{$v_product_info->titre}} </option>
       <?php } ?>
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
