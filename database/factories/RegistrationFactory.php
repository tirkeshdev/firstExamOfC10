<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $lesson = DB::table('lessons')->inRandomOrder()->first();
        $student = DB::table('students')->inRandomOrder()->first();
        return [
            'lesson_id' => $lesson->id,
            'student_id' => $student->id,
        ];
    }
}
