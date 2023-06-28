<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Page extends Model
{
    use HasFactory;
    protected $table = 'pages';
    protected $guarded = [];
    public $timestamps = true;
    
    public function file(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
