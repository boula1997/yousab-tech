<?php

namespace Database\Seeders;

use App\Models\Image;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $image = ["رفع المواقع","انشاء المواقع"];
        $gallery_id = ["7","8"];
      
       

        for ($i = 0; $i < 2; $i++) {
            $images = Image::create([
                    'image' => $image[$i],
                    'gallery_id' => $gallery_id[$i],
                   
              
            ]);
        }
       
    }
}
