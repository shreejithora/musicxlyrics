@extends('master.master')
@section('title')
 Music | Lyrics | Life
@endsection


@section('container')
<div class="container">
    <div class="row">
      <div class="col-md-4">
        @include('partials.side_nav')
        </div>
<div class="col-md-5 offset-4" id="registerpage">
  <h3>Create playlist</h3>
  <form method="post" action="{{ route('playlist_store') }}">
    <div class="form-group">
      <label for="playlist_name">Playlist name</label>
      <input type="text" class="form-control" placeholder="playlist name" name="playlist_name" id="playlist_name">
    </div>
   {{csrf_field()}}
    <button type="submit" name="submit" class="btn btn-primary">submit</button>
  </form>
</div>
</div>
   @if(count($errors)>0)
  <div class="alert alert-danger">
    @foreach($errors->all() as $er)
   {{$er}}
    @endforeach
  </div>
  @endif
</div>
@endsection
