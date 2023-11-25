@extends('admin.master')
@section('content')
<div class="container">
<form  action="{{route('menu.store')}}" method="post">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Food Name</label>
    <input type="name" name="foodname" class="form-control" placeholder="FoodName">
    <small class="form-text text-muted"></small>
  </div><br>
  <div class="form-group">
    <label for="">Food Type</label>
    <input type="" name="foodtype" class="form-control" placeholder="FoodType">
  </div><br>
  <div class="form-group">
    <label for="">Food Quantity</label>
    <input type="" name="foodquantity" class="form-control" placeholder="FoodQuantity">
  </div><br>
  <div class="form-group">
    <label for="">Food price</label>
    <input type="" name="foodprice" class="form-control" placeholder="FoodPrice">
  </div><br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@endsection