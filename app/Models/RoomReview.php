<?php

namespace App\Models;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RoomReview extends Model
{
    use HasFactory;

    public function booking(){
        return $this->belongsTo(Booking::class);
    }

}
