<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Illuminate\support\Facades\File;
use Illuminate\support\Facades\Storage;
/*use App\Http\Controllers\DB;*/
use DB;
use App\song;
use App\playlist;


class songcontroller extends Controller
{
    public function getplaylist()
    {
      $user =DB::table('users')->where('id',Auth::id())->first();
      $playlist=DB::table('playlists')->where('id',Auth::id())->first();
      $song =DB::table('songs')->where('id',Auth::id())->first();
      return view('playlist')->with(['user'=>$user,'playlist'=>$playlist,'song'=>$song]);
    }

    public function song_store(Request $request)
    {
      $this->validate($request,[
        'song_title'=>'required',
        'song_file'=>'required|mimes:mp3',
        'genre'=>'required',
        'singer'=>'required',
      ]);
      $song_file_name= $request->file('song_file')->getclientoriginalname();
      $full_name=$song_file_name;
      $request->file('song_file')->move(public_path('/songfiles'),$full_name);

      $song=new song;
      $song->song_title=$request->input('song_title');
      $song->song_file=$full_name;
      $song->genre=$request->input('genre');
      $song->singer=$request->input('singer');
      $song->playlist_id=$playlist->id;
      $song->save();
      return redirect()->route('getplaylist');
    }
    public function addplaylist()
    {
      return view('addplaylist');
    }

    public function addsong()
    {
      return view('addsong');
    }

    public function playlist_store(Request $request)
    {
      $playlist =DB::table('playlists')->where('id',Auth::id())->first();
      $this->validate($request,[
        'playlist_name'=>'required',
      ]);
      $playlist= new playlist;
      $playlist->playlist_name=$request->input('playlist_name');
      $playlist->save();
      return redirect()->route('getplaylist');
    }

}
