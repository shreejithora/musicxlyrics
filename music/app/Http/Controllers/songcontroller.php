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
use App\user;


class songcontroller extends Controller
{
    public function getplaylist()
    {
      $user =DB::table('users')->where('id',Auth::id())->first();
/*      $playlist=DB::table('playlists')->where('id',Auth::id())->first();
      $song =DB::table('songs')->where('playlist_id',$playlist->id)->get();*/

      $playlists= playlist::all()->toArray();
      return view('playlist',compact('playlists'))->with(['users'=>$user]);
      /*return view('playlist')->with(['user'=>$user,'playlist'=>$playlist,'song'=>$song]);*/
    }

    public function song_store(Request $request)
    {
      $playlist=DB::table('playlists')->where('id',Auth::id())->first();
      $this->validate($request,[
        'song_title'=>'required',
        'song_file'=>'required|mimes:mp3',
        'genre'=>'required',
        'singer'=>'required',
      ]);
      $song_file_name= $request->file('song_file')->GetClientOriginalName();
      $request->file('song_file')->move(public_path('/songfiles'),$song_file_name);

      $song=new song;
      $song->song_title=$request->input('song_title');
      $song->song_file=$song_file_name;
      $song->genre=$request->input('genre');
      $song->singer=$request->input('singer');
      $song->playlist_id=$playlist->id;
      $song->save();
      return redirect()->route('getplaylist');
    }
    public function addplaylist()
    {
      $user =DB::table('users')->where('id',Auth::id())->first();
      return view('addplaylist')->with(['users'=>$user]);
    }

    public function addsong()
    {
      $user =DB::table('users')->where('id',Auth::id())->first();
      return view('addsong')->with(['users'=>$user]);
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

    public function getsong()
    {
      $user =DB::table('users')->where('id',Auth::id())->first();
      return view('song')->with(['users'=>$user]);
    }

}
