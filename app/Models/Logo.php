<?php

namespace App\Models;

use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Logo extends Model
{
    use HasFactory;

    public function service(){
        return $this->hasMany(Service::class);
    }
}
