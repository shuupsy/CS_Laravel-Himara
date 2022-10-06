<?php

namespace App\Models;

use App\Models\Logo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    public function logo(){
        return $this->belongsTo(Logo::class);
    }
}
