@extends('master.master')
@section('title')
 Music | Lyrics | Life
@endsection

@section('container')
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-4">
      @include('partials.side_nav')
    </div>
      <div class="col-md-6 col-md-offset-4">
        <h4>waiting for songs</h4>
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
