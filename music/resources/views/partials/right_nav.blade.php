<ul class="list-group">
  @foreach($songs as $song)
  <li class="list-group-item" ><a href="#" style="color:black !important;">{{$song->song_title}}</a></li>
  @endforeach
</ul>
