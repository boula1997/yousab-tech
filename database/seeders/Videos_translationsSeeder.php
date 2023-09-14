<?php

namespace Database\Seeders;

use App\Models\VideoTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Videos_translationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["رفع المواقع","انشاء المواقع"];
        $title_en = ["Upload websites","Create websites"];
        $video_id=["1","2"];
        $locale_ar = ["ar","ar"];
        $locale_en = ["en","en"];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Video_Translation = VideoTranslation::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'video_id'=>$video_id[$i],
                    'locale'=>$locale_ar[$i],
                    
                ],
                'en' => [
                    'title' => $title_ar[$i],
                    'video_id'=>$video_id[$i],
                    'locale'=>$locale_ar[$i],
                ],
            ]);
          }
    }
}
