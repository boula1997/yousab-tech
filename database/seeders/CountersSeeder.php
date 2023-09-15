<?php

namespace Database\Seeders;

use App\Models\Counter;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CountersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["مشاريع قيد التنفيذ","مشاريع تحت الانشاء"];
        $title_en = ["build projects","new project"];
        $count=['999','800'];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $Counter_Translation = Counter::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
               'count'=>$count[$i]
            ]);
        }
    }
}
