<?php

namespace App\Traits;

use App\Models\File;
use Illuminate\Database\Eloquent\Relations\MorphMany;

trait  MorphFiles
{
    public function files(): MorphMany
    {
        return $this->morphMany(File::class, 'fileable');
    }

    public function uploadFiles()
    {
        if (request()->hasFile('images')) {
            $files = request()->file('images');
            foreach ($files as $file) {
                $data['image'] = $file->store('images');
                $file->move('images', $data['image']);
                $this->files()->create(['url' => $data['image']]);
            }
        }
    }
    public function updateFiles()
    {
        if (request()->hasFile('images')) {
            $files = request()->file('images');
            foreach ($files as $file) {
                $data['image'] = $file->store('images');
                $file->move('images', $data['image']);
                $this->file()->create(['url' => $data['image']]);
            }
        }

        if (request()->has('delimages')) {
            foreach (request()->delimages as $id) {
                $image=$this->file()->find($id);
                File::delete($image->url);
                $image->delete();
            }
        }

    }
}
