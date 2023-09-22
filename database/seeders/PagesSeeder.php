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
        "We have professional skilled"
    ];

        $subtitle_en = [
        "Best it solution",
        "We execute our ideas form the start to finish.",
        null,
        "Porfolio Template",
        "Work Process",
        "More Details",
        "Professional Skill"];

        $description_en = [
        "<p>Dcidunt eget semper nec quam. Sed hendrerit morbi ac felis. Nunc egestas augue pellentesque</p>",

        "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque sed imquam nunullam quis ante. Etiam sit amet orci.

        Duis leo. Sed fringilla mauris siamet nibh. odales sagittis magna. Sed consequat</p>",
        
        "<p>Vestibulum ante ipsum primis ibus orci luctus etultrices posuebilia rae Sed aliquam nisi quis porttitor gue elitrat euismod oplacer

        Rae Sed aliquam nisi quis aliquam Vestibulum ante ipsum primis ibus orci luctus etultrices posuebilia rae Sed aliquam nisi quis porttitor gue elitrat oplacer</p>",
        
        "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum","Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>",

        "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
        "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
        "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>"];


        // Arabic Data
        $title_ar = [
            "إنشاء حلول تكنولوجيا المعلومات أفضل",
            "معلومات عنا",
            "نحن نقدم أفضل حل لتكنولوجيا المعلومات",
            "أحدث محفظة لدينا لاختيارك",
            "كيف تعمل",
            "تعرف على المزيد حول حل تكنولوجيا المعلومات لدينا",
            "لدينا مهارة مهنية"
        ];
    
            $subtitle_ar = [
            "أفضل حلول تكنولوجية",
            "ننفذ أفكارك من البداية إلى النهاية.",
            null,
            "محفظة قالب",
            "آلية العمل",
            "المزيد من التفاصيل",
            "مهارة احترافية"];
    
            $description_ar = [
            "ً<p>Dcidunt eget semper nec quam. Sed hendrerit morbi ac felis. Nunc egestas augue pellentesque</p>",
    
            "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque sed imquam nunullam quis ante. Etiam sit amet orci.
    
            Duis leo. Sed fringilla mauris siamet nibh. odales sagittis magna. Sed consequat</p>",
            
            "<p>Vestibulum ante ipsum primis ibus orci luctus etultrices posuebilia rae Sed aliquam nisi quis porttitor gue elitrat euismod oplacer
    
            Rae Sed aliquam nisi quis aliquam Vestibulum ante ipsum primis ibus orci luctus etultrices posuebilia rae Sed aliquam nisi quis porttitor gue elitrat oplacer</p>",
            
            "<p>Curabitur ullamcorper ultricies nisiam tiamns rhoncus. Maecenas tempus tellus endimentum","Dcidunt eget semper nec quam. Sed hendrerit. acfelis Nunc egestas augue atpellentesque laoreet</p>",
    
            "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
            "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>",
            "<p>Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet adipiscingem neque</p>"];    

            $identifiers=["home-banner","about-us","service-section","portfolio-section","process-section","faq-section","skills-section"];  

             $images=[];
       

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

            // $page->file()->create(["url"=>$images[$i]]);
     }
    }
}
