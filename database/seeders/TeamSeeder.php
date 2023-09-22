<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["Karshin Kumar",
                     "Macal Jonsons",
                     "Estoner William",
                     "Casses Tomas"];
        $subtitle_en = ["Founder",
                        "Director",
                        "HR",
                        "IT Maneger"];
        $description_en = [null,null,null,null];
      
        $title_ar = ["كارشين كومار",
                     "ماكال جونسون",
                     "استونر ويليام",
                     "كاس توماس"];
        $subtitle_ar =["مؤسس",
                        "مدير",
                        "الموارد البشرية",
                        "مدير تكنولوجيا المعلومات"];
        $description_ar =  [null,null,null,null];

        $image=[];
       
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Team = Team::create([
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
