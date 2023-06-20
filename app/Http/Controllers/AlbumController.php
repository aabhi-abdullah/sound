<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio;
use App\Models\Album;

class AlbumController extends Controller
{
    
    public function index()
    {
        $data = Album::all();

        return view('dashboard/album/index',['albums'=> $data]);
    }

    public function create()
    {
        return view('dashboard/album.create');
    }

    public function submit(Request $req)
    {
        $a = new Album;
        $a->name=$req->name;
        $a->status=$req->status;
        if($req->album_image)
        {
            $a->album_image = $req->album_image->store('album_image','public');
        }
        if($a->save())
        {
            return redirect('dashboard/album/index');
        }
        else
        {
            return view('dashboard/album/create');
        }
    }
    public function delete($id){
        $data = Album::find($id);
        $data->delete();
     return redirect('dashboard/album/index');
     }
    public function edit($id)
    {
        $data = Album::find($id);
        return view('dashboard/album/update',['albums'=>$data]);
    }
     public function update(Request $req)
    {
        $a = Album::find($req->id);
        $a->name=$req->name;
        $a->status=$req->status;
        if($req->album_image)
        {
            $a->album_image = $req->album_image->store('album_image','public');
        }
        $a->save();
        return redirect('dashboard/album/index');
    }
 
    public function showSongs($album)
    {
        $albumModel = Album::where('name', $album)->firstOrFail();
        $songs = $albumModel->songs;
        return view('albumsongs', compact('albumModel', 'songs'));
    }
        public function showAlbumSongs($id)
    {
        $album = Album::findOrFail($id);
        $songs = $album->albumsongs;

        return view('videosongs', compact('album', 'songs'));
    }

}
