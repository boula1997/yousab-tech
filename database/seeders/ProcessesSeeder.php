<?php

namespace Database\Seeders;

use App\Models\Process;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProcessesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["Select a project",
                     "Project analysis",
                     "Execute",
                     "Deliver result"];
        $subtitle_en = [null,null,null,null];
        $description_en = [ "<p>Vestibulum ante ipsumusn eratultrices posu world </p>",
                            "<p>Vestibulum ante ipsumusn eratultrices posu world </p>",
                            "<p>Vestibulum ante ipsumusn eratultrices posu world </p>",
                            "<p>Vestibulum ante ipsumusn eratultrices posu world </p>"];

        $title_ar = ["اختر مشروعًا",
                     "تحليل المشروع", 
                     "ينفذ",
                     "تسليم النتيجة"];
        $subtitle_ar =[null,null,null,null];
        $description_ar =  [ "<p>Vestibulum ante ipsumusn eratultrices posu world </p>",
        "<p>Vestibulum ante ipsumusn eratultrices posu world </p>",
        "<p>Vestibulum ante ipsumusn eratultrices posu world </p>",
        "<p>Vestibulum ante ipsumusn eratultrices posu world </p>"];
      
        $image=[];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Process = Process::create([
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
