@extends('employees.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Employees Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Name : {{ $employees->name }}</h5>
        <p class="card-text">Department : {{ $employees->department }}</p>
        <p class="card-text">Phone : {{ $employees->phone }}</p>
        <p class="card-text">Email : {{ $employees->email }}</p>
        <p class="card-text">Address : {{ $employees->address }}</p>
        
  </div>
    </hr>
  </div>
</div>
@stop