<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::updateOrCreate([
            'logo'=> 'logo',
            'tab'=> 'tab',
            'address'=> 'address',
            'title'=> 'title',
            'image'=> 'image',
            'description'=> 'description',
            'map'=> 'map',
            'facebook'=> 'facebook',
            'twitter'=> 'twitter',
            'youtube'=> 'youtube',
            'tiktok'=> 'tiktok',
            'instgram'=> 'instgram',
            'phone1'=> 'phone1',
            'phone2'=> 'phone2',
            'email1'=> 'email1',
            'email2'=> 'email2',
            'appointment1'=> 'appointment1',
            'appointment2'=> 'appointment2',
            'phone3'=> 'phone3',
            'meta_data'=> 'meta_data',
        ]);
    }
}



