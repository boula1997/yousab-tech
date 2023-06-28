<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Setting extends Model implements TranslatableContract
{

    use HasFactory, Translatable;
    protected $table = 'settings';
    protected $guarded = [];
    public $translatedAttributes = ['title', 'subtitle', 'description'];
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
