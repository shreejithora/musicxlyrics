@extends('master.master')
@section('title')
 Music | Lyrics | Life
@endsection

@section('container')
<div class="container">
<div class="row">
  <div class="col-md-3">
    <h4><i class="fas fa-bullseye" ></i>&nbsp;&nbsp;<a href="{{route('getplaylist')}}">{{$users->firstname}} {{$users->lastname}}</a></h4>
    @include('partials.side_nav')<br/>

</div>
<div class="col-md-8">
  <br/>
  <br/>
  <h3>Songs  <span style="float:right;" >  <button type="Save" class="btn btn-outline-secondary"><a href="{{route('addsong')}}" style="color:white !important;">Add songs <i class= "fa fa-plus"></i></a> </button></span>
</h3><hr/ color=white>
  <!--<ul class="list-group"> <li class="list-group-item" </li> </ul> -->
    @foreach($songs as $song)
    <a href="#" style="color:white !important;"><font size="4"><b>{{$song->song_title}}</b></font></a><span style="float:right;" ><a href="#" ><button><i class="fas fa-play"></i></button></a><a href="#" ><button>Add/Edit lyrics</button></a><a href="#" ><button><i class="fas fa-edit"></i></button></a><a href="#" ><button><i class="fa fa-trash"></i></button></a>&nbsp; </span><br/><br/>
    @endforeach



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
