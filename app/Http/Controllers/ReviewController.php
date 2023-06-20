<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;
use App\Models\Review;
use App\Models\video_reviews;
use Auth;
class ReviewController extends Controller
{
    // public function audio_reviews_submit(Request $req)
    // {
    //     $r = new Review;
    //     $r->author_name=$req->author_name;
    //     $r->rating=$req->rating;
    //     $r->comment=$req->comment;
    //     if($req->author_picture)
    //     {
    //         $r->author_picture = $req->author_picture->store('review_images','public');
    //     }
    //     if($r->save())
    //     {
    //         return redirect()->back();
    //     }
    //     else
    //     {
    //         return redirect()->back();
    //     }
    // }
    public function audio_reviews_submit(Request $req)
{
    $req->validate([
        'rating' => 'required',
        'comment' => 'required',
    ]);

    $review = new Review;
    $review->rating = $req->input('rating');
    $review->comment = $req->input('comment');

    if (Auth::check()) {
        $review->author_name = Auth::user()->name;
        // $review->author_picture = Auth::user()->profile_photo_url;
    }

    if ($review->save()) {
        return redirect()->back();
    } else {
        return redirect()->back();
    }
}
public function audio_reviews_update(Request $req, $id)
{
    $req->validate([
        'rating' => 'required',
        'comment' => 'required',
    ]);

    $review = Review::findOrFail($id);
    $review->rating = $req->input('rating');
    $review->comment = $req->input('comment');

    if ($review->save()) {
        return redirect()->back();
    } else {
        return redirect()->back();
    }
}

public function video_reviews_submit(Request $req)
{
    $req->validate([
        'rating' => 'required',
        'comment' => 'required',
    ]);

    $review = new video_reviews;
    $review->rating = $req->input('rating');
    $review->comment = $req->input('comment');

    if (Auth::check()) {
        $review->author_name = Auth::user()->name;
        // $review->author_picture = Auth::user()->profile_photo_url;
    }

    if ($review->save()) {
        return redirect()->back();
    } else {
        return redirect()->back();
    }
}

public function video_reviews_update(Request $req, $id)
{
    $req->validate([
        'rating' => 'required',
        'comment' => 'required',
    ]);

    $review = video_reviews::findOrFail($id);
    $review->rating = $req->input('rating');
    $review->comment = $req->input('comment');

    if ($review->save()) {
        return redirect()->back();
    } else {
        return redirect()->back();
    }
}
}
