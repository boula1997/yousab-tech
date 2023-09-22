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
        $title_en = ["Donas Foknar","Donas Foknar","Donas Foknar","Donas Foknar"];
        $subtitle_en = ["Customer,USA","Customer,USA","Customer,USA","Customer,USA"];
        $description_en = ["<P>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat
        fermentposuere. Morbi porttitor augue id ","We create websites</p>",
        "<P>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat
        fermentposuere. Morbi porttitor augue id ","We create websites</p>",
        "<P>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat
        fermentposuere. Morbi porttitor augue id ","We create websites</p>",
        "<P>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat
        fermentposuere. Morbi porttitor augue id ","We create websites</p>"
    ];
   
     
        $title_ar = ["دوناس فونار","دوناس فونار","دوناس فونار","دوناس فونار"];
        $subtitle_ar =["العميل، الولايات المتحدة الأمريكية",
                        "العميل، الولايات المتحدة الأمريكية",
                        "العميل، الولايات المتحدة الأمريكية",
                        "العميل، الولايات المتحدة الأمريكية"];
        $description_ar =["<P>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat
        fermentposuere. Morbi porttitor augue id ","We create websites</p>",
        "<P>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat
        fermentposuere. Morbi porttitor augue id ","We create websites</p>",
        "<P>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat
        fermentposuere. Morbi porttitor augue id ","We create websites</p>",
        "<P>Eollicitudin nisi nulla eget augue. Maecenas quis turpaliquet, porta lorem et,
        dictum purus. Curabitur vel congue diamamet condimentum metus. Donec feugiat
        fermentposuere. Morbi porttitor augue id ","We create websites</p>"];
       
       
       

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
