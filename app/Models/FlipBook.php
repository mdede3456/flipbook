<?php

namespace App\Models;

use App\Models\Flipbook\CategoryFlipbook;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlipBook extends Model
{
    use HasFactory;

    public const STATUS = [
        1 => "Aktif",
        0 => "Tidak Aktif", 
    ];

    public function category()
    {
        return $this->belongsTo(CategoryFlipbook::class,'category_id')->withTrashed();
    }

    public function author()
    {
        return $this->belongsTo(User::class,'author_id')->withTrashed();
    }
}
