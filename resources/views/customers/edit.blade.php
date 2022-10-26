@extends('customers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Customer</div>
  <div class="card-body">
       
      <form action="{{ url('customer/' .$customers->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$customers->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$customers->name}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$customers->email}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$customers->phone}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$customers->address}}" class="form-control"></br>
        <label>Country</label></br>
        <input type="text" name="country" id="country" value="{{$customers->country}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop