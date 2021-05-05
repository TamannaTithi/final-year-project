@extends('layouts.admin_master')
@section('title','Deshboard')
@section('content')
<div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
        <div class="card card-statistics">
            <div class="card-header">
                <div class="card-heading">
                    <h4 class="card-title text-white">Shopping</h4>
                </div>
            </div>
            <div class="card-body">
                <form method="post" action="{{action('Admin\ShoppingController@store')}}" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                            <label>Type</label>
                            <select name="type" id="" class="form-control">
                                <option value="">Select a Type</option>
                                <option value="Men">Men</option>
                                <option value="Women">Women</option>
                                <option value="Kids">Kids</option>
                                <option value="New Arrival">New Arrival</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Enter name">
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" aria-describedby="emailHelp" placeholder="Enter price">
                        </div>
                        <div class="form-group">
                            <label>Details</label>
                            <textarea class="form-control" name="description"  cols="30" rows="10"></textarea>
                        </div>
                        <div id="dynamicDetails">
                            <label for="exampleInputEmail1">Description</label>
                            <input type="text"  class="form-control" name="description[]" >
                            <button type="button" class="btn btn-info btn-xs mt-2" id="add">Add more details</button>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Picture</label>
                            <input type="file" multiple class="form-control" name="image" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])">
                        </div>
                        <div class="form-group">
                            <img alt="" id="image" width="200" height="100">
                        </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
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