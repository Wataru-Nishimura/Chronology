<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Gallery extends Model
{
    use HasFactory;
    protected $fillable = [
    'gallery_title',
    'gallery_detail',
    'gallery_genre',
    'gallery_period',
    'image_path',
    'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(App\User);
    }
}
