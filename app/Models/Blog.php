<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;
class Blog extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    protected $table = 'blogs';
    protected $guarded = [];
    public $translatedAttributes = ['title', 'subtitle', 'description'];
    public $timestamps = true;
    
    public function file(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
