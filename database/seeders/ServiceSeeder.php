<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_ar = ["استضافة مواقع الويب","انشاء مواقع الويب","ادارة مواقع الويب","تطوير مواقع الويب"];
        $title_en = ["Hosting Websites","Creating Websites","Managing Websites","Web Development"];
        $subtitle_ar = [null,null,null,null];
        $subtitle_en = [null,null,null,null];
        $description_ar = ["نقوم برفع المواقع مجانا","نقوم بانشاء المواقع",null,null];
        $description_en = ["ًWe upload websites for free","We create websites",null,null];
        $images = [];

        for ($i = 0; $i < count($title_ar); $i++) {
            $service = Service::create([
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
