<?php

namespace App\Traits;

use App\Models\File;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait  MorphFile
{
    public function file(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
