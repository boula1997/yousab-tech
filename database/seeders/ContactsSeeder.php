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
       
        $icon=["fa fa-facebook",
                "fa fa-twitter",
                "far fa-bell",
                "fa fa-facebook"];

        $contacts=["https://www.facebook.com",
                  "https://www.twitter.com",
                  "https://www.facebook.com",
                  "https://www.twitter.com"];
      

        for ($i = 0; $i < count($contacts); $i++) {
            $contact = Contact::create([
               'icon'=>$icon[$i],
                'contact'=>$contacts[$i],
            ]);
        }
    }
}
