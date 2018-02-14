@extends('layouts.master')
@section('content')
<div class="col-md-8">
  <hr>
<h1>Registor</h1>

<form action="/registor" method="POST">

   {{ csrf_field() }}

  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" name="name">
  </div>

  <div class="form-group">
    <label for="email">Email:</label>
    <input id="email" name="email" class="form-control">
  </div>

  <div class="form-group">
    <label for="password">Password:</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>

  <div class="form-group">
    <label for="password_confirmation">Password_Confirmaton:</label>
    <input type="password" class="form-control" id="password_comfirmation" name="password_confirmation">
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Registor</button>
  </div>  

  @include('layouts.errors') 

</form>
</div>
@endsection