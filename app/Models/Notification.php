<?php

namespace App\Models;

use App\Models\Room;
use App\Models\RoomReview;
use App\Models\ContactMessage;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory;

    public function contact_message(){
        return $this->belongsTo(ContactMessage::class);
    }
    public function room_review(){
        return $this->belongsTo(RoomReview::class);
    }
    public function room(){
        return $this->belongsTo(Room::class);
    }

}
