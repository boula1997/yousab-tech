<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $guarded = [];
    public $timestamps = true;
    
    public function getImageAttribute()
    {
        return $this->image? asset($this->image):asset('images/portfolio-img-01.jpg');
    }
}
