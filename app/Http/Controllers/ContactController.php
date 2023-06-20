<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $data = Contact::all();

        return view('contact',['Contact'=> $data]);
    }
    public function create()
    {
        return view('contact');
    }

    public function submit(Request $req)
    {
        $c = new Contact;
        $c->name=$req->name;
        $c->email=$req->email;
        $c->message= $req->message;
        if($c->save())
        {
            return redirect('contact');
        }
        else
        {
            return view('contact');
        }
    }
}
