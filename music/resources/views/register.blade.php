@extends('master.master')
@section('title')
 Music | Lyrics | Life
@endsection

@section('container')
<div class="col-md-5 offset-4" id="registerpage">
  <h3>Signup form</h3>
  <form method="post" action="{{ route('userregister') }}">
    <div class="form-group">
      <label for="firstname">first name</label>
      <input type="text" class="form-control" placeholder="first name" name="firstname" id="firstname">
    </div>
    <div class="form-group">
      <label for="lastname">Last name</label>
      <input type="text" class="form-control" placeholder="lastname" name="lastname" id="lastname">

    </div>
    <div class="form-group">
      <label for="email">email</label>
      <input type="email" class="form-control" placeholder="email" name="email" id="email">

    </div>  <div class="form-group">
        <label for="password">password</label>
        <input type="password" class="form-control" placeholder="password" name="password" id="password">

      </div>  <div class="form-group">
          <label for="password1">password conformation</label>
          <input type="password" class="form-control" placeholder="password1" name="password1" id="password1">

        </div>
   {{csrf_field()}}
    <button type="submit" name="submit" class="btn-primary">submit</button>
  </form>

   @if(count($errors)>0)
  <div class="alert alert-danger">
    @foreach($errors->all() as $er)
   {{$er}}
    @endforeach
  </div>
  @endif
</div>
@endsection
