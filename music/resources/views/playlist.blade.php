@extends('master.master')
@section('title')
 Music | Lyrics | Life
@endsection

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-6">
      <h2>Create Playlist <a data-toggle="modal" data-target="#playlistmodal"><i class="fa fa-plus"></i></a></h2>
      <h4>Add songs <a data-toggle="modal" data-target="#songModal"><i class="fa fa-plus"></i></a></h4>
      <hr/ color="white">
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

<!-- playlist modal-->
<div class="modal fade" id="playlistmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="{{route('playlist_store')}}"
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">create your playlist</h4>
      </div>
      <div class="modal-body">
        <span class="input-group-addon" id="basic-addon1">playlist name</span>
        <input type="text" class="form-control" name="playlist_name" placeholder="playlist name" aria-describedby="basic-addon1">
      </div>
      <br/>

    {{csrf_field()}}
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="Save" class="btn btn-primary">Save </button>
    </div>
  </form>
</div>
</div>
</div>

<!-- song model-->

<div class="modal fade" id="songModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form method="post" action="{{route('song_store')}}"
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">add your songs</h4>
      </div>
      <div class="modal-body">
        <span class="input-group-addon" id="basic-addon1">song title</span>
        <input type="text" class="form-control" name="song_title" placeholder="song title" aria-describedby="basic-addon1">
      </div>
      <br/>
      <label>upload Song file</label>
    <input type="file" name="song_file"><br/>
      <div class="modal-body">
        <span class="input-group-addon" id="basic-addon1">Genre</span>
        <input type="text" class="form-control" name="genre" placeholder="genre" aria-describedby="basic-addon1">
      </div>
      <br/>
      <div class="modal-body">
        <span class="input-group-addon" id="basic-addon1">Song length</span>
        <input type="time" class="form-control" name="length" placeholder="length" aria-describedby="basic-addon1">
      </div>
      <br/>
      <div class="modal-body">
        <span class="input-group-addon" id="basic-addon1">Artist</span>
        <input type="text" class="form-control" name="singer" placeholder="artist" aria-describedby="basic-addon1">
      </div>
      <br/>
    </div>
    {{csrf_field()}}
    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      <button type="Save" class="btn btn-primary">Save </button>
    </div>
  </form>
</div>
</div>
</div>
@endsection
