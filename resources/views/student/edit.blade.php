<!-- <h1> Hello {{$user->first_name}} </h1> -->
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
            <form action="/student/{{$user->id}}" method="post" >
                @csrf
                @method("PATCH")
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div class="form-outline">
        <label class="form-label"  for="form3Example1">First name</label>
        <input type="text" value="{{$user->first_name}}" name="first_name" id="form3Example1" class="form-control" />
      </div>
      @error('image')                   
                        <strong style=" color:red;">{{ $message }} </strong>
                   
            @enderror  
    </div>
    <div class="col">
      <div class="form-outline">
        <label class="form-label" for="form3Example2">Last name</label>
        <input type="text" value="{{$user->last_name}}" name="last_name" id="form3Example2" class="form-control" />
      </div>
    </div>
  </div>

  <!-- Email input -->
  <div class="form-outline mb-4">
    <label class="form-label" for="form3Example3">Email address</label>
    <input type="email" value="{{$user->email}}" id="form3Example3"  name="email"class="form-control" />
  </div>

   <!-- Mobile input -->
   <div class="form-outline mb-4">
       <label class="form-label" for="form3Example3">Mobile Number</label>
    <input type="number"  value="{{$user->phone}}" name="phone" id="form3Example3" class="form-control" />
  </div>

   <!-- Gender input -->
   <div class="form-outline mb-4">
    <label class="form-label" for="form3Example3">Gender</label> <br>
    <!-- <input type="email"  value="{{$user->phone}}" id="form3Example3" class="form-control" /> -->
    <label class="radio-inline">
    
      <input type="radio" name="gender"  value="male" {{($user->gender=="male")?"checked" : "" }} > Male 
    </label>
    <label class="radio-inline">
      <input type="radio"  value="female"  name="gender" {{($user->gender =="female")?"checked" : "" }} > Female
    </label>
  </div>
 
 

  <!-- Submit button -->
  <button type="submit" class="btn btn-primary btn-block mb-4">Update</button>


</form>
            </div>
        </div>
    </div>
@endsection
