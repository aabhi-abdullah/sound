<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio;
use App\Models\Year;
use App\Models\Video;

class YearsController extends Controller
{
    public function index()
    {
        $data = Year::all();

        return view('dashboard/year/index',['years'=> $data]);
    }

    public function create()
    {
        return view('dashboard/year.create');
    }

    public function submit(Request $req)
    {
        $y = new Year;
        $y->name=$req->name;
        if($req->year_image)
        {
            $y->year_image = $req->year_image->store('year_image','public');
        }
        if($y->save())
        {
            return redirect('dashboard/year/index');
        }
        else
        {
            return view('dashboard/year/create');
        }
    }
    public function delete($id){
        $data = Year::find($id);
        $data->delete();
     return redirect('dashboard/year/index');
     }
    public function edit($id)
    {
        $data = Year::find($id);
        return view('dashboard/year/update',['years'=>$data]);
    }
     public function update(Request $req)
    {
        $y = Year::find($req->id);
        $y->name=$req->name;
        if($req->year_image)
        {
            $y->year_image = $req->year_image->store('year_image','public');
        }
        $y->save();
        return redirect('dashboard/year/index');
    }
    public function yearSongs($year)
{

    $yearModel = Year::where('name', $year)->firstOrFail();
    $songs = Audio::where('releasedate', $yearModel->name)->get();

    return view('yearsongs', compact('yearModel', 'songs'));
}
    public function yearVideoSongs($year)
{
    $yearModel = Year::where('name', $year)->firstOrFail();
    $songs = Video::where('year_id', $yearModel->name)->get();
    return view('yearvideosongs', compact('yearModel', 'songs'));
}
}
