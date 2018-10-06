<ul class="list-group">
  @foreach($playlist as $pl)
  <li class="list-group-item" ><a href="{{route('addsong')}}" style="color:black !important;"><b>Add songs</b></a></li>
  @endforeach
</ul>
