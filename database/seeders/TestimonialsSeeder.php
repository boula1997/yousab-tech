<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["Upload websites","Create websites"];
        $subtitle_en = [null,null];
        $description_en = ["ًWe upload websites for free","We create websites"];
        
        $title_ar = ["رفع المواقع","انشاء المواقع"];
        $subtitle_ar =[null,null];
        $description_ar = ["نقوم برفع المواقع مجانا","نقوم بانشاء المواقع"];
       
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Testimonial = Testimonial::create([
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
