@extends('layouts.admin_master')
@section('title','Parlour Profile')
@section('content')

<div class="row py-5">
  <div class="col-md-3 col-sm-6 py-4">
      <div class="box box-primary">
          <div class="box-body box-profile">
            <img class="profile-user-img img-responsive text-center rounded-circle" src="{{asset('public/uploads/parlours/'.$parlour->image)}}" width="200" height="150" alt="User profile picture">
              <h3 class="profile-username text-white text-center">{{$parlour->name}}</h3>

            <ul class="list-group list-group-unbordered">
              <li class="list-group-item">
                <b></b> <a class="pull-right">{{$parlour->description}}</a>
              </li>
              <li class="list-group-item">
                 <a class="pull-right">{{$parlour->address}}</a>
              </li>
            </ul>
            <div class="bottom py-2 text-center bg-white">
              <a class="btn btn-primary btn-twitter btn-sm" href="twitter.com">
                  <i class="fa fa-twitter"></i>
              </a>
              <a class="btn btn-danger btn-sm" rel="publisher"
                 href="">
                  <i class="fa fa-google-plus"></i>
              </a>
              <a class="btn btn-primary btn-sm" rel="publisher"
                 href="">
                  <i class="fa fa-facebook"></i>
              </a>
              <a class="btn btn-warning btn-sm" rel="publisher" href="">
                  <i class="fa fa-behance"></i>
              </a>
          </div>
        </div>
      </div>
  </div>
     <div class="col-md-9">
        <div class="row">
          <div class="col-md-6 ">
            <div class="card card-statistics tbody-bc">
              <div class="card-header">
                  <div class="card-heading">
                      <h4 class="card-title text-white">Image Upload</h4>
                  </div>
              </div>
              <div class="card-body">
                <form action="{{action('Admin\ParlourController@parlour_images')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <input type="hidden" name="id" value="{{$parlour->id}}">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Profile Picture</label>
                    <input type="file" multiple class="form-control" name="image[]" multiple>
                </div>
                <button type="submit" class="btn btn-primary bg-dark btn-sm mb-4 ">Save Images</button>
                </form>
              </div>
          </div>
      </div> 
      <div class="col-md-6">
        <div class="card card-statistics tbody-bc">
          <div class="card-header">
              <div class="card-heading">
                  <h4 class="card-title text-white">Update Packages</h4>
              </div>
          </div>
          <div class="card-body">
            <form action="{{action('Admin\ParlourController@service_store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="id" value="{{$parlour->id}}">
              <div class="form-group">
              <label for="exampleInputEmail1">Package Name</label>
              <input type="text"  class="form-control" name="name" >
              <label for="exampleInputEmail1">Prices</label>
              <input type="number"  class="form-control" name="price" >
              <div id="dynamicService">
                <label for="exampleInputEmail1">Services</label>
                  <input type="text"  class="form-control" name="package[]" >
                  <button type="button" class="btn btn-info btn-sm bg-dark  mt-3" id="add">Add another Service</button>
               </div>
              
            </div>
            <button type="submit" class="btn btn-primary btn-sm  bg-dark mb-4"> Save Packages</button>
            </form>
          </div>
      </div>
  </div>
</div>
</div>      
<div class="row">
   <div class="col-md-6">
    <h3 class="text-white">Photos</h3>
    <div class="row">
      @foreach ($images as $item)

      <div class="col-sm-3 mt-2">
         <img src="{{asset('public/uploads/parlours/gallary/'.$item->image)}} " style="
            width: 100px;
            height: 100px;
        " alt="">
            <a onclick="return confirm('Are you sure?')" href="{{action('Admin\ParlourController@photo_delete', ['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a>      
      </div>
      @endforeach
    </div>
  </div> 

  <div class="col-md-6">
    <h3 class="text-white">Services</h3>
      <div class="row">
        
          <div class="row editable-wrapper">
                    
              <div class="table-responsive">
                <table id="" class="table display responsive nowrap table-light table-bordered tbody-bc">
                  <thead class="thead-light">               
                      <tr>
                            <th>Name</th>
                            <th>Services</th>
                            <th>Prices</th>
                            <th>Action</th>
                                                                    
                      </tr>                                   
                  </thead>
                      <tbody>
                          @foreach ($services as $item)
                          <tr>
                              <td>{{$item->name}}</td>
                              <td>@foreach(json_decode($item->packages) as $row)
                              {{$row->name}},
                                    @endforeach</td>
                                <td>{{$item->price}}</td>
                                                    
                                <td><a onclick="return confirm('Are you sure?')" href="{{action('Admin\ParlourController@service_delete', ['id'=>$item->id])}}" class="btn btn-sm btn-danger">Del</a></td>
                            </tr>
                        </tbody>
                            @endforeach
                </table>
              </div>                   
            
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
            $("#dynamicService").append('<div class="removable mt-2"><input type="text"  class="form-control" name="package[]" ><button type="button" class="btn btn-danger btn-xs remove-div mt-1">Remove</button></div>');
        //}
    });
    $(document).on('click', '.remove-div', function(){
        $(this).parents('.removable').remove();
    });
</script>
@endsection