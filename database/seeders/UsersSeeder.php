<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name_ar = ["ابراهيم سامى",";كيرلس فؤاد"];
        $name_en = ["Ibrahim Samy","Keroles Fouad"];
        $email = ["ibrahimsamy308@gmail.com","ibrahim@gmail.com"];
        $pass = ["123456789","123456789"];
        // $description_ar = ["نقوم برفع المواقع مجانا","نقوم بانشاء المواقع"];
        // $description_en = ["ًWe upload websites for free","We create websites"];
        // $images = [];

        for ($i = 0; $i < count($name_ar); $i++) {
            $user = User::create([
                'ar' => [
                    'name' => $name_ar[$i],
                    'email' => $email[$i],
                    'password' =>Hash::make($pass[$i]),
                    
                ],
                'en' => [
                    'name' => $name_en[$i],
                    'email' => $email[$i],
                    'password' =>Hash::make($pass[$i]),
                ]
            ]);
        }
    }
}
