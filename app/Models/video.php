<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    protected $table = 'videos';
    
    protected $fillable = [
        'id','artist_id','album_id','year_id','title', 'artist', 'album', 'genre', 'releasedate', 'language', 'lyrics', 'image', 'music'
    ];
    // public function artist()
    // {
    //     return $this->belongsTo(Artist::class);
    // }
    public function album()
    {
        return $this->belongsTo(album::class,'album_id', 'id');
    }
    public function year()
    {
        return $this->belongsTo(year::class,'year_id', 'id');
    }
    public function artist()
    {
        return $this->belongsTo(Artist::class, 'artist_id', 'id');
    }
}