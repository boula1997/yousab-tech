<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Product extends Model implements TranslatableContract
{
    use HasFactory, Translatable,MorphFile;

    /**
     * The attributes that are mass assignable.
     *	
     * @var array
     */
    protected $guarded = [];
    public $translatedAttributes = ['title', 'subtitle', 'description'];
    public function getImageAttribute(){
        return  $this->file?asset($this->file->url): asset('default.jpg');
   }
}
