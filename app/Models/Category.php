<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;



class Category extends Model implements TranslatableContract
{
    use HasFactory, Translatable, MorphFile;
    protected $table = 'categories';
    public $translatedAttributes = ['title'];
    protected $guarded = [];
    public $timestamps = true;

    public function getImageAttribute(){
        return  $this->file? asset($this->file->url): settings()->logo;
   }



   public function products(){
    return $this->hasMany(Product::class);
   }

   public function subcategories(){
    return $this->hasMany(Subcategory::class);
   }

    
}