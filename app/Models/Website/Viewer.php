<?php

namespace App\Models\Website;

use App\Models\FlipBook;
use App\Models\Video\Video;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viewer extends Model
{
    use HasFactory;

    public function majalah()
    {
        return $this->belongsTo(FlipBook::class,'content_id');
    }

    public function video()
    {
        return $this->belongsTo(Video::class,'content_id');
    }
}


