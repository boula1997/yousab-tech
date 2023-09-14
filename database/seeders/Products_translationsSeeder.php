<?php

namespace Database\Seeders;

use App\Models\ProductTranslation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Products_translationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name_ar = ["رفع المواقع","انشاء المواقع"];
        $name_en = ["Upload websites","Create websites"];
        $detail_ar =[null,null];
        $detail_en = [null,null];
        $product_id = ["1","2"];
        $locale_ar = ["ar","ar"];
        $locale_en = ["en","en"];
       

        for ($i = 0; $i < count($name_ar); $i++) {
            $Product_Translation = ProductTranslation::create([
                'ar' => [
                    'name' => $name_ar[$i],
                    'detail' => $detail_ar[$i],
                    'product_id' => $product_id[$i],
                    'locale'=>$locale_ar[$i],
                    
                ],
                'en' => [
                    'name' => $name_en[$i],
                    'detail' => $detail_en[$i],
                    'product_id' => $product_id[$i],
                    'locale'=>$locale_ar[$i],
                ],
            ]);
     }
    }
}
