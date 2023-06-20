<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use App\Models\Video;

class IndexController extends Controller
{
    
    public function indexVideo()
    {
        $data = Video::all();

        return view('index',['Videos'=> $data]);
    }
    public function play($id)
    {
        $data = Video::find($id);
        return view('videodetails',['Videos'=>$data]);
    }
}
