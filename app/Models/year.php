<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class year extends Model
{
    use HasFactory;
    protected $table ="years";
    protected $fillable = [   
    'id',
    'name',
    'year_image' ];
    public function audio()
{
    return $this->hasMany(Audio::class, 'releasedate', 'name');
}
public function video()
    {
        return $this->hasMany(Video::class, 'year_id', 'name');
    }

}
