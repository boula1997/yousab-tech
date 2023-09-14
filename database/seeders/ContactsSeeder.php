<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $name_ar = ["ابراهيم سامى","كيرو بولا"];
        $name_en = ["Ibrahim Samy","Kero Boula"];
        $email =[null,null];
        $Phone = ["01289189890","0124578960"];
        $message_ar = ["ًكيفيه عمل موقع بتكلفه اقل","كيفيه استخدام الموقع"];
        $message_en = ["ًWe upload websites for free","We create websites"];
      

        for ($i = 0; $i < count($name_ar); $i++) {
            $contact = Contact::create([
                'ar' => [
                    'name' => $name_ar[$i],
                    'email' => $email[$i],
                    'phone' => $Phone[$i],
                    'message'=>$message_ar[$i],
                    
                ],
                'en' => [
                    'name' => $name_en[$i],
                    'email' => $email[$i],
                    'phone' => $Phone[$i],
                    'message'=>$message_en[$i],
                ],
            ]);
        }
    }
}
