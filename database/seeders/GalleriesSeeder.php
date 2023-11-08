<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["سابقة اعمالنا"];
        $title_en = ["Our Work"];
        $subtitle_ar =[null];
        $subtitle_en = [null];
        $description_ar = [null];
        $description_en = [null];

        $images=[  ["images/cgWPIBaJgb4Scv32ZJiBUlfgxxmN1VBPaZXHuBNQ.png",
                    "images/jt56GhBaJfQpaA0NvqXZ7bdakujTuzyW70lRLtoE.png",
                    "images/Ix6TIYHwCvxgPtWaspfddbGvyZYXXt9jrec8yAkn.png",
                    "images/7eXRM4Y6H4A8avrsL6ihOwVZ4b7abBbA6pDuyET4.png",
                    "images/ynASd3T5mGdFuUZi6uvWaih3GZjs4w0VRltMK470.png",
                    "images/PbJ4udZknEOWeALHvGi3sQuThWWohAonTar88NOF.png",
                    "images/Y94snrI09Gex5SNQO5yZrqzE2e3Guht71rEWbsXX.png",
                    "images/NhEKA5TSZe0EOe15L4jDznG48seP3urSspWgl79u.png",
                    "images/fu4OVbhm6tLlfpM0JOESaKkSMRLuF6OuOlVT13DF.png",
                    "images/ipHIqPYZfDEcp6EjxpQzumYCBPt0GzsFnhtCt294.png",
                    "images/mOPxVTc5mVCGnZTkxFFokefhj9jR52Ws1k1kTbMZ.png",
                   ],
                ];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Gallery = Gallery::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                 
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                ]
            ]);
            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $Gallery->file()->create(["url"=>$image]);
        }
    }
}
