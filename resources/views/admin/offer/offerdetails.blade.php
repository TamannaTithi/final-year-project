@extends('layouts.admin_master')
@section('title','Photographers Profile')
@section('content')

<div class="row">
   <!-- <div class="col-md-3">
       < <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle rounded-circle" src="{{asset('public//assets')}}/img/photo-profile.webp" width="100" height="100" alt="User profile picture">

              <h3 class="profile-username text-center">Nina Mcintire</h3>

              <p class="text-muted text-center">Senior Photographer</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
             /.box-body 
          </div>
    </div>-->
    <div class="col-md-9">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-statistics">
              <div class="card-header">
                  <div class="card-heading">
                      <h4 class="card-title">Image Upload</h4>
                  </div>
              </div>
              <div class="card-body">
                <form action="{{action('Admin\OfferController@offer_images')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{$offer->id}}">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Profile Picture</label>
                    <input type="file" multiple class="form-control" name="image[]" multiple>
                </div>
                <button type="submit" class="btn btn-success btn-sm">Save Images</button>
                </form>
              </div>
          </div>
      </div>
      <div class="col-md-6">
        <div class="card card-statistics tbody-bc">
          <div class="card-header">
              <div class="card-heading">
                  <h4 class="card-title">Update Packages</h4>
              </div>
          </div>
          <div class="card-body">
            <form action="{{action('Admin\OfferController@details_store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$offer->id}}">
              <div class="form-group">
              <label for="exampleInputEmail1">Name</label>
              <input type="text"  class="form-control" name="name" >
              <div id="dynamicDetails">
              <label for="exampleInputEmail1">Description</label>
                <input type="text"  class="form-control" name="description[]" >
                <button type="button" class="btn btn-info bg-dark btn-sm mt-3" id="add">Add another details</button>
              </div>
            </div>
            <button type="submit" class="btn btn-success bg-dark btn-sm"> Save Details</button>
            </form>
          </div>
      </div>
  </div>
          </div>
          </div>
</div>
<div class="row mt-3">
  <div class="col-md-6">
    <h3>Photos</h3>
    <div class="row">
      @foreach ($images as $item)

      <div class="col-sm-3 mt-2">
        
            <img src="{{asset('public/uploads/offers/gallary/'.$item->image)}} " style="
            width: 100px;
            height: 100px;
        " alt="">
            <a onclick="return confirm('Are you sure?')" href="{{action('Admin\OfferController@photo_delete', ['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a>      
      </div>
      @endforeach
    </div>
  </div>
  <div class="col-md-6">
    <h3>Description</h3>
    <div class="row">
    

      <div class="col-sm-9 mt-2">
        
                                       <!-- begin page title -->
                                       
                                <!-- end row -->
                                <!-- begin row -->
                                <div class="row editable-wrapper">
                                    <div class="col-lg-12 ">
                                        
                                                <div class="table-responsive">
                                                <table id="" class="table display responsive nowrap table-light table-bordered">
                                                        <thead class="thead-light">
                                                          
                                                               
                                                          
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Details</th>
                                                                <th>Action</th>
                                                                
                                                            </tr>
                                                            
                                                        </thead>
                                                        <tbody>
                                                          @foreach ($details as $item)
                                                            <tr>
                                                                <td>{{$item->name}}</td>
                                                                <td>@foreach(json_decode($item->description) as $row)
                                                                {{$row->name}},
                                                                 @endforeach</td>
                                                                
                                                  
                                                                <td><a onclick="return confirm('Are you sure?')" href="{{action('Admin\OfferController@details_delete', ['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a></td>
                                                                
                              
                                                             </tr>
                                                                 
                                                            
                                                           </tbody>
                                                           @endforeach
                                                    </table>
                                                   
                                                      
                                                  
                                                 
                                                
                                            </div>
                                        
                                    </div>
                                </div>
                                <!-- end row -->
                        
      </div>
    
    </div>
  </div>
</div>

@endsection
@section('script')
<script type="text/javascript">
    //var max_value = 4;
    var i = 1;
    $("#add").click(function(){
        
        ++i;
        // if(i <= max_value){
            $("#dynamicDetails").append('<div class="removable mt-2"><input type="text"  class="form-control" name="description[]" ><button type="button" class="btn btn-danger btn-xs remove-div mt-1">Remove</button></div>');
        //}
    });
    $(document).on('click', '.remove-div', function(){
        //alert('tahmina')
        $(this).parents('.removable').remove();
    });
</script>
@endsection