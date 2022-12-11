@extends('employees.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Employee</div>
  <div class="card-body">
       
      <form action="{{ url('employee/' .$employees->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
        <label>Department</label></br>
        <input type="text" name="department" id="department" value="{{$employees->department}}" class="form-control"></br>
        <label>Phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$employees->phone}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="text" name="email" id="email" value="{{$employees->email}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$employees->address}}" class="form-control"></br>
       
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop