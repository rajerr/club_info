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
              <h6 class="m-0 font-weight-bold text-primary">Les slides</h6></div>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>id</th>
                      <th>titre</th>
                      <th>contenu</th>
                      <th>date ajout</th>
                      <th>statut</th>
                      <th>action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>id</th>
                      <th>titre</th>
                      <th>contenu</th>
                      <th>date ajout</th>
                      <th>statut</th>
                      <th>action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                       @foreach($all_slider as $v_slider)
                 
                        <tr>
                            <td>{{ $v_slider->id }}</td>
                            <td>{{ $v_slider->titre }}</td>
                            <td><div style="text-align: justify;">{{ $v_slider->contenu }}</div></td>
                            <td><img src="{{URL::to($v_slider->slider_image)}}" style="height: 70px; width: 100px;"></td>
                            <td class="center">
                                @if($v_slider->publication_status==1)
                                    <span class="label label-success"><div style="color: green">Active</div> </span>
                                @else
                                    <span class="label label-danger"><div style="color: red">Inactive</div></span>
                                @endif
                            </td>

                            <td class="center">
                                @if($v_slider->publication_status==1)
                                    <a  href="{{URL::to('/unactive_slider/'.$v_slider->id)}}">
                                          <i class="fa fa-thumbs-up"></i>
                                    </a>
                                @else
                                    <a  href="{{URL::to('/active_slider/'.$v_slider->id)}}">
                                          <i class="fa fa-thumbs-up"></i>
                                    </a>
                                @endif
                                 <a  href="{{URL::to('/edit_slide/'.$v_slider->id)}}">
                                  <i class="fa fa-eye"></i>
                                </a>
                                  <a class="tn-xs-1" href="{{URL::to('/delete_slider/'.$v_slider->id)}}" id="delete">
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
          <h5 class="modal-title" id="exampleModalLabel"><center><strong> Formulaire de slide</strong></center> </h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
       <form method="post" class="form-validate" action="{{URL::to('/save_slider')}}" enctype="multipart/form-data">                  {{csrf_field()}}
         <div class="row">                                             
         <div class="col-sm-6 col-xs-12">
         <label>titre <strong style="color:red;">* </strong> </label>
         <input type="text" name="titre" placeholder="titre" class="form-control" required="true">
        </div>
        <div class="col-sm-6 col-xs-12">
        <label>image<strong style="color:red;">* </strong> </label>
         <input type="file" name="slider_image" placeholder="photo" class="form-control" required="true">
        </div>
        <div class="col-sm-6 col-xs-12">
          <label>contenu  <strong style="color:red;">* </strong> </label>
         <textarea type="text" name="contenu" placeholder=" contenu" cols="15px" class="form-control" required="true"></textarea>
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
