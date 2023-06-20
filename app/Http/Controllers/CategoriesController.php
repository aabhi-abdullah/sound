<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;
use App\Models\Artist;
use App\Models\Album;
use App\Models\Year;
use App\Models\Audio;


class CategoriesController extends Controller
{
    public function index()
    {
        $data = Categorie::all();

        return view('dashboard/categories/index',['Categories'=> $data]);
    }

    public function create()
    {
        return view('dashboard/categories.create');
    }

    public function submit(Request $req)
    {
        $c = new Categorie; //object Video
        $c->title=$req->title;
        $c->descr=$req->descr;
        if($req->cat_image)
        {
            $c->cat_image = $req->cat_image->store('catimage','public');
        }
        if($c->save())
        {
            return redirect('dashboard/categories/index');
        }
        else
        {
            return view('dashboard/categories/create');
        }
    }
    public function delete($id){
        $data = Categorie::find($id);
        $data->delete();
     return redirect('dashboard/categoriescategories/index');
     }
    public function edit($id)
    {
        $data = Categorie::find($id);
        return view('dashboard/categories/update',['categories'=>$data]);
    }
     public function update(Request $req)
    {
        $c = Categorie::find($req->id);
        $c->title=$req->title;
        $c->descr=$req->descr;
        if($req->cat_image)
        {
            $c->cat_image = $req->cat_image->store('cat_image','public');
        }
        $c->save();
        return redirect('dashboard/categories/index');
    }

    public function categories()
    {
        $data = Categorie::all();

        return view('categories',['Categories'=> $data]);
    }
    public function cateartist()
    {
        $artists = Artist::all();
        
        return view('cateartist', [
            'artists' => $artists,
        ]);
    }
    public function catealbum()
    {
        $albums = Album::all();
        
        return view('catealbum', [
            'albums' => $albums,
        ]);
    }
    public function cateyears()
    {
        $years = Year::all();
        
        return view('cateyears', [
            'years' => $years,
        ]);
    }
    public function catevideoartist()
    {
        $artists = Artist::all();
        
        return view('catevideoartist', [
            'artists' => $artists,
        ]);
    }
    public function catevideoalbum()
    {
        $albums = Album::all();
        
        return view('catevideoalbum', [
            'albums' => $albums,
        ]);
    }
    public function catevideoyears()
    {
        $years = Year::all();
        
        return view('catevideoyears', [
            'years' => $years,
        ]);
    }
}
