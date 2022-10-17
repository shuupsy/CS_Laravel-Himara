<?php

namespace App\Models;

use App\Models\GalleryCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class GalleryPhoto extends Model
{
    use HasFactory;

    public function gallery_category(){
        return $this->belongsTo(GalleryCategory::class);
    }

    protected $fillable = ['title', 'photo', 'gallery_category_id'];
}
