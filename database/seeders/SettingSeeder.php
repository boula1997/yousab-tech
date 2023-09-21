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
        Setting::create([
            'en' => [
                'appointment1' => 'From 8 Am to 5.5 Pm',
                'appointment2' => 'From 8 Am to 5.5 Pm',
                'title' => 'Yousab Tech',
                'address' => 'Online',
                'description' => 'We are a web development company specialized in creating, fixing and mangaing websites using latest technologies and web services',
                'meta_data' => 'Web Development Company',
            ],
            'ar' => [
                'appointment1' => 'من 8 ص ل 5.5 م',
                'appointment2' => 'من 8 ص ل 5.5 م',
                'title' => 'يوساب تك',
                'address' => 'عبر الانترنت',
                'description' => 'نحن شركة تطوير لمواقع الويب متخصصون في انشاء,صيانة وادارة مواقع الويب',
                'meta_data' => 'شركة خدمات ويب',
            ],
            'logo' => 'images/uIDNx2MSZmaLgp5K0tSqg71KotiqYjefAI42Zmy8.png',
            'tab' => 'images/zg8UoXpl0S9wIJYTz8HFgTDbMYUwPARlgfXF02Tg.png',
            'image' => 'image',
            'map' => 'map',
            'facebook' => 'https://www.facebook.com/YousabTech?mibextid=b06tZ0',
            'twitter' => 'twitter',
            'youtube' => 'youtube',
            'tiktok' => 'tiktok',
            'instgram' => 'instgram',
            'phone1' => '01208050298',
            'phone2' => '01224744417',
            'email1' => 'yousabtech@gmail.com',
            'email2' => 'nessimboula@gmail.com',
            'phone3' => '01126785910',
        ]);
    }
}
