<?php

namespace App\Models\Manga;

use App\Models\Website\Viewer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;

    protected $with = ['media'];

     /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return rand();
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'imageable');
    }

    public function gambar()
    {
        return $this->hasOne(Media::class, 'imageable_id')->oldest();
    }

    public function komik()
    {
        return $this->belongsTo(Komik::class, 'komik_id')->withTrashed();
    }

    public function check()
    {
        return $this->hasMany(Media::class, 'imageable_id');
    }

    public function viewer()
    {
        return $this->hasMany(Viewer::class,'content_id')->where("type","komik");
    }

     
}
