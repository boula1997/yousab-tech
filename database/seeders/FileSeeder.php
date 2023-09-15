<?php

namespace Database\Seeders;

use App\Models\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $url = ["images/H0Opy8LQrpWycBlRthb0wNQ8SxjgTcJHsKCaOE4i.png","images/YK0eSOKsaOiYMrsAwhnOc3hx2JbdLRg09ABq0Pxr.png"];
        $fileable_id =["30","29"];
        $fileable_id = ["App\Models\Page","App\Models\Page"];
      

        for ($i = 0; $i < 2; $i++) {
            $Counter_Translation = File::create([
             
                    'url' => $url[$i],
                    'fileable_id' => $fileable_id[$i],
                    'fileable_id' => $fileable_id[$i],

            ]);
        }
    }
}
