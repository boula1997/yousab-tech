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
        $title_en = ["Ibrahim Samy",
                     "Boula Nessiem",
                     "Tadrous Nessiem",
                     "Emad Osama"];

        $title_ar =["ابراهيم سامى",
                    "بولا نسيم",
                    "تادروس نسيم",
                    "عماد اسامه"];
       
        $icon=["fa fa-facebook",
                "fa fa-twitter",
                "far fa-bell",
                "fa fa-facebook"];

        $contact=["https://www.facebook.com",
                  "https://www.twitter.com",
                  "https://www.facebook.com",
                  "https://www.twitter.com"];
      

        for ($i = 0; $i < count($title_ar); $i++) {
            $contact = Contact::create([
                'ar' => [
                    'title' => $title_ar[$i],
    
                ],
                'en' => [
                    'title' => $title_en[$i],
                ],
               'icon'=>$icon[$i],
                'contact'=>$contact[$i],
            ]);
        }
    }
}
