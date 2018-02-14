@extends('layouts.master')
@section('content')
<div class="col-md-8">
  <hr>
<h1>login</h1>

<form action="/login" method="POST">

   {{ csrf_field() }}

  <div class="form-group">
    <label for="email">Email:</label>
    <input id="email" name="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Login</button>
  </div>  

  @include('layouts.errors') 

</form>
</div>
@endsection