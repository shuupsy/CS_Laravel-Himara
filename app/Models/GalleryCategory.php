<?php

namespace App\Models;

use App\Models\GalleryPhoto;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GalleryCategory extends Model
{
    use HasFactory;

    public function photo(){
        return $this->hasMany(GalleryPhoto::class);
    }
}
