<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;
    protected $fillable = ['gallery_id','image'];

    public function Gallery(){
        return $this->belongsTo(Gallery::class,'gallery_id');
    }
}
