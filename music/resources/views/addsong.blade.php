@extends('master.master')
@section('title')
 Music | Lyrics | Life
@endsection

@section('container')
<div class="container">
    <div class="row">
      <div class="col-md-4">

        <h4><i class="fa fa-circle" ></i>&nbsp;&nbsp;<a href="{{route('getplaylist')}}">{{$users->firstname}} {{$users->lastname}}</a></h4>
      @include('partials.side_nav')
        </div>
<div class="col-md-5 offset-4" id="registerpage">
  <h3>Add songs</h3>
  <form method="post" action="{{ route('song_store') }}" enctype="multipart/form-data">
    <div class="form-group">
      <label for="song_title">song title</label>
      <input type="text" class="form-control" placeholder="songtitle" name="song_title" id="song_title">
    </div>
    <label>upload song file</label><br/>
    <input type="file" name="song_file"><br/><br/>



  <div class="form-group">
      <label for="genre">genre</label>
      <input type="text" class="form-control" placeholder="genre" name="genre" id="genre">

    </div>
    <div class="form-group">
      <label for="singer">singer</label>
      <input type="text" class="form-control" placeholder="singer" name="singer" id="singer">
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
