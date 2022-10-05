<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Option;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Room extends Model
{
    use HasFactory;

    public function tag(){
        return $this->belongsToMany(Tag::class);
    }

    public function option(){
        return $this->belongsToMany(Option::class);
    }
}
