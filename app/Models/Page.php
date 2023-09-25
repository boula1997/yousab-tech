<?php

namespace App\Models;

use App\Traits\MorphFiles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Page extends Model implements TranslatableContract
{
    use HasFactory, Translatable,MorphFiles;
    protected $table = 'pages';
    protected $guarded = [];
    public $translatedAttributes = ['title', 'subtitle', 'description'];
    public $timestamps = true;

    public function getImagesAttribute()
    {
        return  count($this->files)>0?$this->files:["default.jpg"];
    }
    
}
