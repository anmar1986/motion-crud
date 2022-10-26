@extends('customers.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Customers Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $customers->name }}</h5>
        <p class="card-text">Email : {{ $customers->email }}</p>
        <p class="card-text">Phone : {{ $customers->phone }}</p>
        <p class="card-text">Address : {{ $customers->address }}</p>
        <p class="card-text">Country : {{ $customers->country }}</p>
  </div>
    </hr>
  </div>
</div>