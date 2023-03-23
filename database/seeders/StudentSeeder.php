<?php

namespace Database\Seeders;

use App\Entities\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->truncate();

        Student::factory()->count(100)->create();
    }
}
