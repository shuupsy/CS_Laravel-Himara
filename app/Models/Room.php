<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Option;
use App\Models\RoomReview;
use App\Models\RoomCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public function category(){
        return $this->belongsTo(RoomCategory::class);
    }

    public function option(){
        return $this->belongsToMany(Option::class);
    }

    public function tag(){
        return $this->belongsToMany(Tag::class);
    }

    public function review(){
        return $this->hasMany(RoomReview::class);
    }
    public function getAverageStar(){
        return $this->score()->average('rating');
    }
}
