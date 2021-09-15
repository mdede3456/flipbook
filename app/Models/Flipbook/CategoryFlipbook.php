<?php

namespace App\Models\Flipbook;

use App\Models\FlipBook;
use App\Models\Video\Video;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryFlipbook extends Model
{
    use HasFactory, SoftDeletes;

    public function majalah()
    {
        return $this->hasMany(FlipBook::class,'category_id');
    }

    public function video()
    {
        return $this->hasMany(Video::class,'category_id');
    }
}
