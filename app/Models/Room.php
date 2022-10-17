<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Option;
use App\Models\RoomPhoto;
use App\Models\RoomReview;
use App\Models\RoomCategory;
use App\Models\RoomDescription;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public function room_category(){
        return $this->belongsTo(RoomCategory::class);
    }

    public function room_options(){
        return $this->belongsToMany(Option::class);
    }

    public function photo(){
        return $this->hasMany(RoomPhoto::class);
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
    public function room_descriptions(){
        return $this->hasOne(RoomDescription::class);
    }
}
