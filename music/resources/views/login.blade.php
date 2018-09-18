@extends('master.master')
@section('title')
 Music | Lyrics | Life
@endsection

@section('container')
  <div class="col-md-6 col-md-offset-4">
  <h1>Login</h1>
  <form method="post" action="{{route('login')}}">
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" name="email" class="form-control" placeholder="email" id="email">
    </div>
    <div class="form-group">
      <label for="password1">Password</label>
      <input type="password" name="password" class="form-control" placeholder="password" id="password">
    </div>
  <!--  <div class="form-group">
      <label for="password2">Password confirmation</label>
      <input type="password" name="password2" class="form-control" placeholder="password" id="password">
    </div>
    {{ csrf_field() }}
    <div class="form-group">
      <label for="radio">who are you?</label><br/>
      <input type="radio" value="1" name="isemployee">I am employee<br/>
      <input type="radio" value="0" name="isemployee">I am employer
    </div>-->
    {{ csrf_field() }}
    <button type="submit" class="btn btn-primary">Submit</button>
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
