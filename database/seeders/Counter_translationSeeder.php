<?php

namespace Database\Seeders;

use App\Models\CounterTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Conter_translationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["مشاريع قيد التنفيذ","مشاريع تحت الانشاء"];
        $title_en = ["build projects","new project"];
        $counter_id =["2","4"];
        $locale_ar = ["ar","ar"];
        $locale_en = ["en","en"];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Counter_Translation = CounterTranslation::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'counter_id' => $counter_id[$i],
                    'locale' => $locale_ar[$i],
                
                    
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'counter_id' => $counter_id[$i],
                    'locale' => $locale_en[$i],
                ],
            ]);
        }
    }
}
