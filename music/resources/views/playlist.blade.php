@extends('master.master')
@section('title')
 Music | Lyrics | Life
@endsection

@section('container')
<div class="container">
<h4>this is my playlist</h4>
@if(count($errors)>0)
<div class="alert alert-danger">
    @foreach($errors->all() as $er)
    {{$er}}
    @endforeach
</div>
@endif
</div>
@endsection
