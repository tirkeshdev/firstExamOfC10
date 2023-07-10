<?php

namespace Database\Seeders;

use App\Models\Classroom;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassroomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $classrooms = [
            'A-1',
            'B-4',
            'C-1',
            'A-2',
            'B-2',
            'B-1',
            'A-5',
            'B-6',
            'D-4',
            'D-5',
        ];

        foreach ($classrooms as $classroom) {
            $obj = new Classroom();
            $obj->name = $classroom;
            $obj->save();
        }

    }
}
