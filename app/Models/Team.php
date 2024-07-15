<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function socialMedia()
    {
        return $this->belongsTo(SocialMedia::class,'social_media_id');
    }
}
