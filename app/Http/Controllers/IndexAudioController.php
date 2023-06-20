<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio;

class IndexAudioController extends Controller
{
    public function indexAudio()
    {
        $data = Audio::all();

        return view('index',['Audios'=> $data]);
    }
    public function play($id)
    {
        $data = Audio::find($id);
        return view('audiodetails',['Audios'=>$data]);
    }
}
