<?php

namespace Database\Seeders;

use App\Models\Video;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $youtube_link = ["www.youtube.com","www.google.com"];
    
      
       

        for ($i = 0; $i < 2; $i++) {
            $Video_Translation = Video::create([
              
                    'youtube_link' => $youtube_link[$i],
               
            ]);
          }
    }
}
