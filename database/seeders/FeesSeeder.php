<?php

namespace Database\Seeders;

use App\Models\Fee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $amount=[500];
        $project=[1];
        $rest=[300];
      

        for ($i = 0; $i < count($amount); $i++) {
            $fee = Fee::create([
                 'amount'=>$amount[0],

                 'project_id'=>$project[0],
                
                 'rest'=>$rest[0],
            ]);
        }
    }
}
