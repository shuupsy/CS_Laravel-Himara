<?php

namespace App\Models;

use App\Models\User;
use App\Models\RoomReview;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Booking extends Model
{
    use HasFactory;

    public function room(){
        return $this->belongsTo(Room::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function room_review(){
        return $this->hasOne(RoomReview::class);
    }
}
