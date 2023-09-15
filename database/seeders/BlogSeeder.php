<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Blog;



class BlogSeeder extends Seeder
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

        for ($i = 0; $i < count($title_ar); $i++) {
            $BlogTranslation = Blog::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                    'subtitle' => $subtitle_ar[$i],
                  
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                    'subtitle' => $subtitle_en[$i],
                ],
            ]);
        }
    }
}
