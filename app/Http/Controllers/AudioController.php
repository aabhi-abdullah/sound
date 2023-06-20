<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Audio;
use App\Models\Video;
use App\Models\Review;
use App\Models\categorie;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Year;
use App\Models\User;

class AudioController extends Controller
{
    public function index()
    {
        $data = Audio::all();

        return view('dashboard/audio/index',['Audios'=> $data]);
    }

    public function create()
    {
        $data = Artist::all();
        $data2 = Album::all();

        return view('dashboard/audio.create',['artists'=> $data],['albums'=> $data2]);
    }

    public function submit(Request $req)
    {
        $a = new Audio(); //object Audio
        $a->title = $req->title;
        $a->artist = $req->artist;
        $a->album = $req->album;
        $a->genre = $req->genre;
        $a->artist_id = $req->input('artist_id');
        $a->album_id = $req->input('album_id');
        // $a->year_id = $req->input('year_id');
        $a->releasedate = $req->releasedate;
        $a->language = $req->language;
        $a->lyrics = $req->lyrics;
        if($req->image)
        {
            $a->image = $req->image->store('images','public');
        }
        if($req->music)
        {
            $a->music = $req->music->store('audios','public');
        }
        if($a->save())
        {
            return redirect('dashboard/audio/index');
        }
        else
        {
            return view('dashboard/audio/create');
        }
    }
    public function delete($id){
        $data = Audio::find($id);
        $data->delete();
     return redirect('dashboard/audio/index');
     }
    public function edit($id)
    {
        $data = Audio::find($id);
        return view('dashboard/audio/update',['Audios'=>$data]);
    }
     public function update(Request $req)
    {
        $a = Audio::find($req->id);
        $a->title=$req->title;
        $a->artist=$req->artist;
        $a->album= $req->album;
        $a->genre= $req->genre;
        $a->artist_id= $req->artist_id;
        $a->album_id= $req->album_id;
        $a->releasedate= $req->releasedate;
        $a->language= $req->language;
        $a->lyrics= $req->lyrics;
        if($req->image)
        {
            $a->image = $req->image->store('images','public');
        }
        if($req->music)
        {
            $a->music = $req->music->store('audios','public');
        }
        $a->save();
        return redirect('dashboard/audio/index');
    }
    public function indexAudio()
    {
        $data = Audio::all();
        $data2 = Video::all();
        $today = Carbon::today();
        $lastMonthStart = date('Y-m-01', strtotime('last month'));
        $lastMonthEnd = date('Y-m-t', strtotime('last month'));

        $audiosongs = Audio::whereBetween('releasedate', [$lastMonthStart, $lastMonthEnd])->get();
        $videosongs = Video::whereBetween('releasedate', [$lastMonthStart, $lastMonthEnd])->get();
        return view('index', ['Audios' => $data, 'Videos' => $data2, 'audiosongs' => $audiosongs,'videosongs' => $videosongs]);
    }

        public function play2($id)
        {
            $data = Audio::find($id);
            $data1 = Review::all();

            return view('musicdetails',['Audios'=>$data],['Reviews'=> $data1]);
        }
        public function musics()
        {
        $data = Audio::all();
        $genres = Audio::select('genre', 'image')
        ->whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)')
                  ->from('audio')
                  ->groupBy('genre');
        })
        ->get();
        $languages = Audio::select('language', 'image')
        ->whereIn('id', function ($query) {
            $query->selectRaw('MIN(id)')
                  ->from('audio')
                  ->groupBy('language');
        })
        ->get();
        $artists = Artist::all();
        $albums = Album::all();
        $years = Year::all();
    
        return view('musics', [
            'Audios' => $data,
            'albums' => $albums,
            'artists' => $artists,
            'genres' => $genres,
            'years' => $years,
            'languages' => $languages
        ]);
    }

    public function playmusic($id)
    {
        $data = Audio::find($id);
        $data1 = Review::orderByDesc('created_at')->get();
        $englishSongs = Audio::find($id);
        $hindiSongs = Audio::find($id);
        $song = Audio::find($id);
        $today = Carbon::today();
        $lastMonthStart = date('Y-m-01', strtotime('last month'));
        $lastMonthEnd = date('Y-m-t', strtotime('last month'));
        $audiosongs = Audio::whereBetween('releasedate', [$lastMonthStart, $lastMonthEnd])->get();

        return view('musicdetails', [
            'Audios' => $data,
            'Reviews' => $data1,
            'Audios' => $englishSongs,
            'Audios' => $hindiSongs,
            'Audios' => $song,
            'audiosongs' => $audiosongs
        ]);
    }
    public function pm($id)
    {
        $songs = Audio::find($id);

        return view('musicdetails', ['Audios' => $songs,]);
    }
    public function showSongs($album)
    {
        $songs = Audio::where('album', $album)->get();
        
        return view('songs', ['songs' => $songs]);
    }
    public function showSongsByArtist($artist)
    {
        $songs = Audio::where('artist', $artist)->get();
        
        return view('artistsongs', ['songs' => $songs]);
    }
    public function showSongsBygenre($genre)
    {
        $songs = Audio::where('genre', $genre)->get();
        
        return view('genresongs', ['songs' => $songs]);
    }
    public function showYearSongs($year)
    {
        $songs = Audio::whereYear('releasedate', $year)->get();
        
        return view('yearsongs', ['songs' => $songs]);
    }
    public function showSongsBylanguage($language)
    {
        $songs = Audio::where('language', $language)->get();
        
        return view('languagesongs', ['songs' => $songs]);
    }
    public function dashboard()
    {
        $count = Audio::count();
        $count1 = User::count();
        $count2 = Video::count();
        $count3 = Artist::count();
        $count4 = Album::count();
        $count5 = Year::count();
        return view('dashboard', ['count' => $count, 'count1' => $count1,'count2' => $count2,'count3' => $count3,'count4' => $count4,'count5' => $count5]);
    }

}
