<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;
use App\Models\Audio;

class ArtistController extends Controller
{
    public function index()
    {
        $data = Artist::all();

        return view('dashboard/artist/index',['artists'=> $data]);
    }

    public function create()
    {
        return view('dashboard/artist.create');
    }

    public function submit(Request $req)
    {
        $a = new Artist; //object Video
        $a->name=$req->name;
        $a->status=$req->status;
        if($req->artist_image)
        {
            $a->artist_image = $req->artist_image->store('artist_image','public');
        }
        if($a->save())
        {
            return redirect('dashboard/artist/index');
        }
        else
        {
            return view('dashboard/artist/create');
        }
    }
    public function delete($id){
        $data = Artist::find($id);
        $data->delete();
     return redirect('dashboard/artist/index');
     }
    public function edit($id)
    {
        $data = Artist::find($id);
        return view('dashboard/artist/update',['artists'=>$data]);
    }
     public function update(Request $req)
    {
        $a = Artist::find($req->id);
        $a->name=$req->name;
        $a->status=$req->status;
        if($req->artist_image)
        {
            $a->artist_image = $req->artist_image->store('artist_image','public');
        }
        $a->save();
        return redirect('dashboard/artist/index');
    }
    public function artistSongs($id)
    {
        $artist = Artist::findOrFail($id);
        $songs = $artist->artistaudio;
        
        return view('artistsongs', compact('artist', 'songs'));
    }
    public function artistVideo($id)
    {
        $artist = Artist::findOrFail($id);
        $songs = $artist->videoartist;
        
        return view('videosongs', compact('artist', 'songs'));
    }
    public function cateartistVideo($id)
    {
        $artist = Artist::findOrFail($id);
        $songs = $artist->videoartist;
        
        return view('videoartists', compact('artist', 'songs'));
    }
    public function cateartist($id)
    {
        $artist = Artist::findOrFail($id);
        $songs = $artist->cateartistaudio;
        
        return view('cateartist', compact('artist', 'songs'));
    }
}
