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

    public function uploadFile()
    {
        if (request()->hasFile('image')) {
            $file = request()->file('image');
            $image = request()->image->store('images');
            $file->move('images',  $image);
            $this->file()->create(['url' =>  $image]);
        }
    }
    public function updateFile()
    {
        if (request()->hasFile('image')) {
            if (file_exists($this->image))
                File::delete($this->image);
            $file = request()->file('image');
            $image = request()->image->store('images');
            $file->move('images', $image);
            $this->file()->create(['url' => $image]);
        }
    }
}
