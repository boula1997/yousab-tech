<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute($val)
    {
        return $val? asset($val):asset(settings()->logo);
    }
}
