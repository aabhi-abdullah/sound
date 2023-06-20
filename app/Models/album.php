<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class album extends Model
{
    use HasFactory;
    protected $table ="albums";
    protected $fillable = [   
    'id',
    'name',
    'album_image',
    'status' ];
//     public function albumaudio()
// {
//     return $this->hasMany(Audio::class, 'album_id');
// }
// public function albumaudio()
// {
//     return $this->hasMany(Audio::class, 'album_id', 'id');
// }
// public function catealbumaudio()
// {
//     return $this->hasMany(Audio::class, 'album_id',);
// }

public function songs()
{
    return $this->hasMany(Audio::class, 'album_id');
}
public function albumsongs()
{
    return $this->hasMany(Video::class, 'album_id');
}
}
