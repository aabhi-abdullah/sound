<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Audio;
use App\Models\Video;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request->input('query');
        
        $results = Audio::where('title', 'like', "%{$query}%")
                            ->get();
        
        return response()->json($results);
    }
}
