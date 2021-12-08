
@extends('layouts.app')
@section('content')
  <div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
        <a  class="btn btn-primary mb-2" href="{{ url('/student/create') }}">Add Student</a>
        <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sl No </th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Action</th>
      
    </tr>
  </thead>
  <tbody>
    @foreach ($students as $student)
    <tr>
      <th scope="row"> {{$student->id}} </th>
      <td>{{$student->first_name}}</td>
      <td>{{$student->last_name}}</td>
      <td>{{$student->email}}</td>
      <td>{{$student->phone}}</td>
      <td> <a type="button" class="btn btn-primary" href="/student/{{$student->id}}/edit">Edit</a> 
       <a type="button" class="btn btn-danger" href="/student/{{$student->id}}/delete">Delete</a> </td>

      
    </tr>  
    @endforeach
    
  </tbody>
</table>
        </div>
    </div>
</div>
@endsection
 



