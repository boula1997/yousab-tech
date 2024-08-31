<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $title=["dummydata"];
        $status=[1]; 
       $employee=["dummydata"];
       $project=[1];
      

        for ($i = 0; $i < count($title); $i++) {
            $task = Task::create([
                 'title'=>$title[0],

               'status'=>$status[0],
                
                 'employee'=>$employee[0],
                
                 'project'=>$project[0],
            ]);
        }
    }
}
