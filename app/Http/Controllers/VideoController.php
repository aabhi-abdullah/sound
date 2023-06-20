<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Audio;
use App\Models\Review;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Year;
use App\Models\video_reviews;

class VideoController extends Controller
{
    public function index()
    {
        $data = Video::all();

        return view('dashboard/video/index',['Videos'=> $data]);
    }

    public function create()
    {
        $artists = Artist::all();
        $years = Year::all();
        $albums = Album::all();
    
        return view('dashboard/video.create', compact('artists', 'years', 'albums'));
    }
    

    public function submit(Request $req)
    {
        $v = new Video(); // Create a new Video object
        $v->title = $req->title;
        $v->artist = $req->artist;
        $v->album = $req->album;
        $v->genre = $req->genre;
        $v->language = $req->language;
        $v->artist_id = $req->input('artist_id');
        $v->album_id = $req->input('album_id');
        $v->year_id = $req->input('year_id');
        $v->releasedate = $req->releasedate;
        $v->lyrics = $req->lyrics;

        if ($req->hasFile('thumbnailimage')) {
            $v->thumbnailimage = $req->thumbnailimage->store('thumbnailimage', 'public');
        }

        if ($req->hasFile('video')) {
            $v->video = $req->video->store('videos', 'public');
        }

        if ($v->save()) {
            return redirect('dashboard/video/index');
        } else {
            return view('dashboard/video/create');
        }
    }
    public function delete($id){
        $data = Video::find($id);
        $data->delete();
     return redirect('dashboard/video/index');
     }
    public function edit($id)
    {
        $data = Video::find($id);
        return view('dashboard/video/update',['Videos'=>$data]);
    }
     public function update(Request $req)
    {
        $v = Video::find($req->id);
        $v->title=$req->title;
        $v->artist= $req->artist;
        $v->album= $req->album;
        $v->genre= $req->genre;
        $v->language= $req->language;
        $v->artist_id= $req->artist_id;
        $v->album_id= $req->album_id;
        $v->releasedate= $req->releasedate;
        $v->lyrics= $req->lyrics;
        if($req->thumbnailimage)
        {
            $v->thumbnailimage = $req->thumbnailimage->store('thumbnailimage','public');
        }
        if($req->video)
        {
            $v->video = $req->video->store('videos','public');
        }
        $v->save();
        return redirect('dashboard/video/index');
    }
    // public function indexVideo()
    // {
    //     $data = Video::all();

    //     return view('index',['Videos'=> $data]);
    // }
    public function play1($id)
    {
        $data = Video::find($id);
        $data2 = video_reviews::orderByDesc('created_at')->get();
        return view('videodetails',['Videos'=>$data],['Reviews'=> $data2]);
    }
    public function videos()
    {
        $data1 = Video::all();
        // $albums = Video::select('album', 'artist', 'thumbnailimage')
        // ->whereIn('id', function ($query) {
        //     $query->selectRaw('MIN(id)')
        //           ->from('videos')
        //           ->groupBy('album');
        // })
        // ->get();
        // $artists = Video::select('artist', 'thumbnailimage')
        // ->whereIn('id', function ($query) {
        //     $query->selectRaw('MIN(id)')
        //           ->from('videos')
        //           ->groupBy('artist');
        // })
        // ->get();
        // $years = Video::selectRaw('YEAR(releasedate) AS year, MAX(thumbnailimage) AS thumbnailimage')
        // ->groupBy('year')
        // ->orderBy('year', 'desc')
        // ->distinct()
        // ->get();
        $languages = Video::select('language', 'thumbnailimage')
        ->whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)')
                  ->from('videos')
                  ->groupBy('language');
        })
        ->get();
        $genres = Video::select('genre', 'thumbnailimage')
        ->whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)')
                  ->from('videos')
                  ->groupBy('genre');
        })
        ->get();
        $artists = Artist::all();
        $albums = Album::all();
        $years = Year::all();

        return view('videos', [
            'Videos' => $data1,
            'albums' => $albums,
            'artists' => $artists,
            'years' => $years,
            'languages' => $languages,
            'genres' => $genres
        ]);

    }
    public function playmusic($id)
    {
        $data1 = Video::find($id);
        return view('videodetails',['Videos'=>$data1]);
    }
    public function showVideoSongs($album)
    {
        $songs = Video::where('album', $album)->get();
        
        return view('videosongs', ['songs' => $songs]);
    }
    public function showVideoArtists($artist)
    {
        $songs = Video::where('artist', $artist)->get();
        
        return view('videoartists', ['songs' => $songs]);
    }
    public function showVideoLanguage($language)
    {
        $songs = Video::where('language', $language)->get();
        
        return view('videolanguages', ['songs' => $songs]);
    }
    public function showVideoYears($year)
    {
        $songs = Video::whereYear('releasedate', $year)->get();
        
        return view('videoyears', ['songs' => $songs]);
    }
    public function showVideoBygenre($genre)
    {
        $songs = Video::where('genre', $genre)->get();
        
        return view('videogenres', ['songs' => $songs]);
    }

    public function playvideo($id)
    {
        $data = Video::find($id);
        $data2 = video_reviews::orderByDesc('created_at')->get();

        return view('videodetails',['Videos'=>$data],['Reviews'=> $data2]);
    }
}
