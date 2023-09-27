<?php

namespace Database\Seeders;

use App\Models\Page;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PagesSeeder extends Seeder
{   
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // English Data
        $title_en = [
        "Creating a better IT solutions",
        "About US",
        "We provide the best IT solution",
        "Our latest Portfolio for your choice",
        "How to work it",
        "Know more about our it solution",
        "We have professional skilled",
        "Expert Team",
        "Contact",
        "We are here to answer your questions 24/7"
    ];

        $subtitle_en = [
        "Best it solution",
        "We execute our ideas form the start to finish.",
        null,
        "Porfolio Template",
        "Work Process",
        "More Details",
        "Professional Skill",
        "Meet with our expert",
        "Get in touch",
        "Need for it solution services" ];

        $description_en = [
        "<p>Dcidunt eget semper nec quam. Sed hendrerit morbi ac felis. Nunc egestas augue pellentesque</p>",

        "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque sed imquam nunullam quis ante. Etiam sit amet orci.

        Duis leo. Sed fringilla mauris siamet nibh. odales sagittis magna. Sed consequat</p>",
        
        "<p>Vestibulum ante ipsum primis ibus orci luctus etultrices posuebilia rae Sed aliquam nisi quis porttitor gue elitrat euismod oplacer

        Rae Sed aliquam nisi quis aliquam Vestibulum ante ipsum primis ibus orci luctus etultrices posuebilia rae Sed aliquam nisi quis porttitor gue elitrat oplacer</p>",
        
        "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum","Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>",

        "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
        "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
        "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
        "<p>Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>",
        "<p>Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>",
        null ];


        // Arabic Data
        $title_ar = [
            "إنشاء حلول تكنولوجيا المعلومات أفضل",
            "معلومات عنا",
            "نحن نقدم أفضل حل لتكنولوجيا المعلومات",
            "أحدث محفظة لدينا لاختيارك",
            "كيف تعمل",
            "تعرف على المزيد حول حل تكنولوجيا المعلومات لدينا",
            "لدينا مهارة مهنية",
            "فريق الخبراء",
            "تواصل معنا ",
            "نحن هنا للإجابة على أسئلتك على مدار اليوم"
        ];
    
            $subtitle_ar = [
            "أفضل حلول تكنولوجية",
            "ننفذ أفكارك من البداية إلى النهاية.",
            null,
            "محفظة قالب",
            "آلية العمل",
            "المزيد من التفاصيل",
            "مهارة احترافية",
            "اجتمع مع خبراءنا",
            "ابقى على تواصل",
            "تحتاج إلى خدمات الحل"];
    
            $description_ar = [
            "ً<p>Dcidunt eget semper nec quam. Sed hendrerit morbi ac felis. Nunc egestas augue pellentesque</p>",
    
            "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque sed imquam nunullam quis ante. Etiam sit amet orci.
    
            Duis leo. Sed fringilla mauris siamet nibh. odales sagittis magna. Sed consequat</p>",
            
            "<p>Vestibulum ante ipsum primis ibus orci luctus etultrices posuebilia rae Sed aliquam nisi quis porttitor gue elitrat euismod oplacer
    
            Rae Sed aliquam nisi quis aliquam Vestibulum ante ipsum primis ibus orci luctus etultrices posuebilia rae Sed aliquam nisi quis porttitor gue elitrat oplacer</p>",
            
            "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum","Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>",
    
            "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
            "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
            "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
            "<p>وصف التيم</p>",
            "<p>Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>",
            null];    

            $identifiers=["home-banner","about-us","service-section",
                          "portfolio-section","process-section","faq-section",
                          "skills-section","team-section","contact-section","solution-section"];  

             $images=[  ["images/6Uc5BhjmQJtfneedg6lKQ4U0Mh4SHOs5OAd8StZd.webp",],
                        ["images/dbfWCgbV5jglKcWKTYT6SeIsuAsQxCQ4GGDLHXex.webp"],
                        null,
                        null,
                        null,
                        ["images/8dTGgGdIWqURKxo2SYehtgjCL3AKeSKmINcUVMyy.webp"],
                        ["images/l2K1cEb5wcsPVzhHhj2OWNcQXBPKKrofxrfhgu5W.webp",
                         "images/khyVZVtSks0zZfm3NQAA3496oI8ovcN3rzKD9rX4.webp",
                         "images/NzpSLncvvrosX4WqGDJLZtWvY3Xrvxzw6saO8xr6.webp"],
                        null,
                        null,
                        null
                    ];
       

        for ($i = 0; $i < count($title_ar); $i++) {
            $page = Page::create([
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
                'identifier'=>$identifiers[$i]
            ]);

            if(isset($images[$i]))
            foreach($images[$i] as $image)
            $page->file()->create(["url"=>$image]);
     }
    }
}
