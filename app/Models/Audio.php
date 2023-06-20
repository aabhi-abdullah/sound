<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Artist;

class Audio extends Model
{
    protected $table = 'Audio';
    
    protected $fillable = [
        'id','category_id','artist_id','album_id','title','artist', 'album', 'genre', 'releasedate', 'language', 'lyrics', 'image', 'music'
    ];
    // public function artist()
    // {
    //     return $this->belongsTo(Artist::class);
    // }
    public function cateartist()
    {
        return $this->belongsTo(Artist::class);
    }
    public function year()
    {
        return $this->belongsTo(year::class);
    }
    // public function artists()
    // {
    //     return $this->belongsTo('App\Models\Artist','artist_id','artist_id');
    // }
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id', 'id');
    }
}
