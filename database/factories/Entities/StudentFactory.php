<?php

namespace Database\Factories\Entities;

use App\Entities\Student;
use App\Enums\StudentGrade;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'  => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'grade' => fake()->randomElement([
                StudentGrade::Grade6,
                StudentGrade::Grade7,
                StudentGrade::Grade8,
                StudentGrade::Grade9,
            ]),
        ];
    }
}
