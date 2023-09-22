<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;



class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $title_en = [" Why we are?",
                     " What we do for you?",
                     " 100% data security"];
        $description_en = ["<p> Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                            adipiscingem neque sed ipsum. amquam nunc</P>",
                            "Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                            adipiscingem neque sed ipsum. amquam nunc</P>",
                            "Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                            adipiscingem neque sed ipsum. amquam nunc</P>"];

        $title_ar = ["لماذا نحن؟",
                     "دوام؟",
                     "أمن البيانات بنسبة %100" ];
        $description_ar = ["<p> Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                            adipiscingem neque sed ipsum. amquam nunc</P>",
                            "Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                            adipiscingem neque sed ipsum. amquam nunc</P>",
                            "Maecenas tempus, tellus eget condime honcus sem quam semper libero sit amet
                            adipiscingem neque sed ipsum. amquam nunc</P>"];
      

        $image=[];
        
        for ($i = 0; $i < count($title_ar); $i++) {
            $FaqTranslation = Faq::create([
                'ar' => [
                    'title' => $title_ar[$i],
                    'description' => $description_ar[$i],
                  
                ],
                'en' => [
                    'title' => $title_en[$i],
                    'description' => $description_en[$i],
                ],
            ]);
        }
    }
}
