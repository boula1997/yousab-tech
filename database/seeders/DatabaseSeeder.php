<?php

namespace Database\Seeders;

use App\Http\Requests\Dashboard\VideoRequest;
use App\Models\Admin;
use App\Models\Service;
use App\Models\Setting;
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
            Blogs_TranslationsSeeder::class,
            ContactsSeeder::class,
            Counter_translationSeeder::class,
            CountersSeeder::class,
            FileSeeder::class,
            Galleries_translationsSeeder::class,
            GalleriesSeeder::class,
            ImagesSeeder::class,
            Pages_translationsSeeder::class,
            PagesSeeder::class,
            PremissionsSeeder::class,
            ProcessesSeeder::class,
            Processes_translationsSeeder::class,
            ProductsSeeder::class,
            Products_translationsSeeder::class,
            SettingSeeder::class,
            ServiceSeeder::class,
            SlidersSeeder::class,
            Sliders_translationsSeeder::class,
            TestimonialsSeeder::class,
            Testimonials_translationsSeeder::class,
            UsersSeeder::class,
            VideosSeeder::class,
            Videos_translationsSeeder::class,

        ]);
        
    }
}
