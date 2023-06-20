<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Audio;
use App\Models\Artist;

class artist extends Model
{
    use HasFactory;
    protected $table ="artists";
    protected $fillable = [   
    'id',
    'name',
    'artist_image',
    'status' ];
    public function artistaudio()
{
    return $this->hasMany(Audio::class, 'artist_id');
}
    public function cateartistaudio()
{
    return $this->hasMany(Audio::class, 'artist_id');
}
public function videoartist()
{
    return $this->hasMany(Video::class, 'artist_id');
}
// public function audio()
//     {
//         return $this->hasMany('App\Models\Audio','artist_id','artist_id');
//     }
// public function audios()
// {
//     return $this->hasMany(Audio::class, 'artist_id', 'id');
// }
}
