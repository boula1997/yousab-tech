<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $guarded = [];
    public $timestamps = true;
    
    public function getImageAttribute($val)
    {
        return $val? asset($val):asset(settings()->logo);
    }
}
