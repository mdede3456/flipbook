<?php

namespace App\Models\Manga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Komik extends Model
{
    use HasFactory, SoftDeletes;

    public function genre()
    {
        return $this->belongsTo(Genre::class,'genre_id')->withTrashed();
    }

    public function chapter()
    {
        return $this->hasMany(Chapter::class,'komik_id')->orderBy("name","desc");
    }

    
}
