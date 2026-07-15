<?php

namespace App\Traits;

use App\Models\File as ModelsFile;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Support\Facades\File;
use Intervention\Image\Facades\Image;

trait  MorphFiles
{
    public function files(): MorphMany
    {
        return $this->morphMany(ModelsFile::class, 'fileable');
    }

public function uploadFiles()
{
    if (request()->hasFile('images')) {
        $files = request()->file('images');

        // تحديد المجلد حسب اسم الراوت
        $routeName = request()->route()->getName();
        $folder = str_contains($routeName, 'portfolios') ? 'portfolios' : 'images';

        foreach ($files as $file) {
            $path = $file->store($folder);
            $file->move(public_path($folder), basename($path));

            $this->files()->create(['url' => $folder . '/' . basename($path)]);

            Image::make(public_path($folder . '/' . basename($path)))
                ->resize(2400, 1600, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save(public_path($folder . '/' . basename($path)));
        }
    }
}

public function updateFiles()
{
    $this->deleteSpecificFiles();

    if (request()->hasFile('images')) {
        $files = request()->file('images');

        // تحديد المجلد حسب اسم الراوت
        $routeName = request()->route()->getName();
        $folder = str_contains($routeName, 'portfolios') ? 'portfolios' : 'images';

        foreach ($files as $file) {
            $path = $file->store($folder);
            $file->move(public_path($folder), basename($path));

            $this->files()->create(['url' => $folder . '/' . basename($path)]);

            Image::make(public_path($folder . '/' . basename($path)))
                ->resize(2400, 1600, function ($constraint) {
                    $constraint->aspectRatio();
                    $constraint->upsize();
                })
                ->save(public_path($folder . '/' . basename($path)));
        }
    }
}


    public function deleteFiles()
    {
        if ($this->files()) {
            foreach ($this->files() as $file) {
                if(file_exists($file->url))
                  File::delete($file->url);
                if(isset($file->url))
                  $file->delete();
            }
        }
    }

    public function deleteSpecificFiles()
    {
        if (request()->has('delimages')) {
            foreach (request()->delimages as $id) {
                $image = ModelsFile::find($id);
                if(file_exists($image->url))
                  File::delete($image->url);
                if(isset($image->url))
                  $image->delete();
            }
        }
    }
}
