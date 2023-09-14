<?php

namespace Database\Seeders;

use App\Models\GalleryTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Galleries_translationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["رفع المواقع","انشاء المواقع"];
        $title_en = ["Upload websites","Create websites"];
        $subtitle_ar =[null,null];
        $subtitle_en = [null,null];
        $description_ar = ["نقوم برفع المواقع مجانا","نقوم بانشاء المواقع"];
        $description_en = ["ًWe upload websites for free","We create websites"];
        $gallery_id = ["7","8"];
        $locale_ar = ["ar","ar"];
        $locale_en = ["en","en"];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Gallery_Translation = GalleryTranslation::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                    'locale'=>$locale_ar[$i],
                    'gallery_id'=>$gallery_id[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                    'locale'=>$locale_en[$i],
                    'gallery_id'=>$gallery_id[$i],
                ],
            ]);
        }
    }
}
