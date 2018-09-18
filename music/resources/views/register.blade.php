@extends('master.master')
@section('title')
 Music | Lyrics | Life
@endsection

@section('container')
<div class="col-md-6 col-md-offset-4">
  <h3>Signup form</h3>
  <form method="post" action="{{ route('userregister') }}">
    <div class="form-group">
      <label for="company_name">first name</label>
      <input type="text" class="form-control" placeholder="first name" name="firstname" id="firstname">
    </div>
    <div class="form-group">
      <label for="address">Last name</label>
      <input type="text" class="form-control" placeholder="lastname" name="lastname" id="lastname">

    </div>
    <div class="form-group">
      <label for="contact_no">email</label>
      <input type="email" class="form-control" placeholder="email" name="email" id="email">

    </div>  <div class="form-group">
        <label for="website">password</label>
        <input type="password" class="form-control" placeholder="password" name="password" id="password">

      </div>  <div class="form-group">
          <label for="business_type">password conformation</label>
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
