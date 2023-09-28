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
        $title_en = ["Hosting Websites",
                    "Creating Websites",
                    "Managing Websites",
                    "Web Development"];
        $subtitle_en = [null,null,null,null];
        $description_en = [ "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus
                             endimentum </p>",
                            "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus
                             endimentum </p>",
                            "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus
                             endimentum </p>",
                            "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus
                             endimentum </p>"];

        $title_ar = ["استضافة مواقع الويب",
                    "انشاء مواقع الويب",
                    "ادارة مواقع الويب",
                    "تطوير مواقع الويب"];  
        $subtitle_ar = [null,null,null,null];
        $description_ar = [ "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus
                                endimentum </p>",
                            "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus
                                endimentum </p>",
                            "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus
                                endimentum </p>",
                            "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus
                                endimentum </p>"];

        $images = ["images/lFm4BhN2x9t3xJnk42ivFtqCWzMCcLppx1Mlr9gN.jpg",
                    "images/tqmoHh1nzC4Zg0IE4JykvWbBigfJpdIxMqxNcYPF.jpg",
                    "images/fih4AHmLMdr3mBpXqeeellC00S18BZm5dDCHcntw.jpg",
                    "images/yvxLurP4RFhTzwsih8n5pYC62eHgY74TDzQ3J8xF.jpg"];
        $icons=["fab fa-facebook-f",
                "fab fa-twitter",
                "far fa-bell",
                "fab fa-facebook-f"];

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
                'icon'=>$icons[$i],
            ]);

            $service->file()->create(["url"=>$images[$i]]);
        }
    }
}
