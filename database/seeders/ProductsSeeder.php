<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
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
      
       

        for ($i = 0; $i < count($name_ar); $i++) {
            $Product = Product::create([
                'ar' => [
                    'name' => $name_ar[$i],
                    'detail' => $detail_ar[$i],
                  
                    
                ],
                'en' => [
                    'name' => $name_en[$i],
                    'detail' => $detail_en[$i],
                    
                ],
            ]);
     }
    }
}
