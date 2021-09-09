<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlipBook extends Model
{
    use HasFactory;

    public const STATUS = [
        0 => "Aktif",
        2 => "Tidak Aktif", 
    ];
}
