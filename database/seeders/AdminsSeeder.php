<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name = ["Ibrahim Samy","Keroles Fouad"];
        $email = ["ibrahimsamy308@gmail.com","ibrahim@gmail.com"];
        $pass = ["123456789","123456789"];
      

        for ($i = 0; $i < 2; $i++) {
            
            $admin = Admin::create([
             
                    'name' => $name[$i],
                    'email' => $email[$i],
                    'password' =>Hash::make($pass[$i]),
                    
                
                
            ]);
        }
       
    }
}
