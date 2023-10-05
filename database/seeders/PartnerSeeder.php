<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title_en = ["Boula Nessim",
                     "Ibrahim Samy",
                     "Kerolos Edward",
                     "Tadrous Emil",
                     "Gerges Makram"];
        $subtitle_en = ["Software Engineer",
                        "Software Engineer",
                        "Web Designer",
                        "Web Developer",
                        "Manager"];
        $description_en = [null,null,null,null,null];
      
        $title_ar = ["بولا نسيم",
                     "ابراهيم سامى",
                     "كيرلس ادوارد",
                     "تادرس اميل",
                     "جرجس مكرم"];

        $subtitle_ar =["مهندس برمجيات",
                       "مهندس برمجيات",
                        "مصمم ويب ",
                        "مطور ويب",
                        "مدير"];
        $description_ar =  [null,null,null,null,null];

        $image=["images/YE92B4LXiM6QhFcQbr5YKECGaMU5k8NokXve9o1m.jpg",
                "images/YQXLPLiQgi8H1E9YE77J3lwUX0qSOYXkHMP192Nz.png",
                "images/pekmLKsEWdfVwDSwbG0sSIZARXfO8GavZPaoOF1D.jpg",
                "images/tAgfJG0vAJHhQsCii9FR441z6tGs9fyGKj92MUzy.jpg",
                "images/zlqIgyZxaZJCmqfSvsxqkTIFsou1vItih8tUaqXi.jpg"];
       
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $Partner = Partner::create([
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
            $Partner->file()->create(["url"=>$image[$i]]);
          }
    }
}
