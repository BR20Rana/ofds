@extends('admin.master')
@section('content')

<div class="container">
<h1> Customer List:</h1>
<a href="{{route('add.customer')}}" class="btn btn-success">Add Customer</a> 
</div>  

<div style = "width:1000px" class="container pt-4">

<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone Number</th>
    </tr>
  </thead>
  <tbody>
    @foreach($customerdata as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->customer_name}}</td>
      <td>{{$item->customer_email}}</td>
      <td>{{$item->address}}</td>
      <td>{{$item->phone}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


@endsection