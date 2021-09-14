<?php

namespace App\Models\Video;

use App\Models\Flipbook\CategoryFlipbook;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(CategoryFlipbook::class,'category_id')->withTrashed();
    }

    public function author()
    {
        return $this->belongsTo(User::class,'author_id')->withTrashed();
    }
}
