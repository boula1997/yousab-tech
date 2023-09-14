<?php

namespace Database\Seeders;

use App\Models\ProcessTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Processes_translationsSeeder extends Seeder
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
        $process_id = ["1","2"];
        $locale_ar = ["ar","ar"];
        $locale_en = ["en","en"];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Process_Translation = ProcessTranslation::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                    'locale'=>$locale_ar[$i],
                    'page_id'=>$process_id[$i],
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                    'locale'=>$locale_en[$i],
                    'process_id'=>$process_id[$i],
                ],
            ]);
     }
    }
}
