<?php

namespace App\Models;

use App\Traits\MorphFile;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory,MorphFile;
    protected $table = 'partners';
    protected $guarded = [];
    public $timestamps = true;
    
    public function getImageAttribute(){
        return  $this->file->url;
   }
}
