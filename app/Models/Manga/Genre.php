<?php

namespace App\Models\Manga;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Genre extends Model
{
    use HasFactory, SoftDeletes;

    public function komik()
    {
        return $this->hasMany(Komik::class,'genre_id');
    }
}
