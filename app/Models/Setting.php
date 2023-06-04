<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{

    use HasFactory;
    protected $table = 'settings';
    protected $guarded = [];
    public $timestamps = true;

    public function getLogoAttribute($val)
    {
        return $val ? asset($val) : asset(settings()->logo);
    }
    public function getTabAttribute($val)
    {
        return $val ? asset($val) : asset(settings()->tab);
    }
}
