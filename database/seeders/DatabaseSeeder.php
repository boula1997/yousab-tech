<?php

namespace Database\Seeders;

use App\Http\Requests\Dashboard\VideoRequest;
use App\Models\Admin;
use App\Models\Service;
use App\Models\Setting;
use App\Models\Team;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            AdminsSeeder::class,
            FaqSeeder::class,
            ContactsSeeder::class,
            CountersSeeder::class,
            GalleriesSeeder::class,
            PagesSeeder::class,
            PremissionsSeeder::class,
            ProcessesSeeder::class,
            ProductsSeeder::class,
            SettingSeeder::class,
            ServiceSeeder::class,
            SlidersSeeder::class,
            TeamSeeder::class,
            TestimonialsSeeder::class,
            UsersSeeder::class,
            VideosSeeder::class,
          

        ]);
        
    }
}
