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
<div class="col-md-8">
<span style="float:right;" >  <button type="Save" class="btn btn-default"><a href="{{route('addsong')}}" style="color:black !important;">Add songs <i class= "fa fa-plus"></i></a> </button></span>

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
