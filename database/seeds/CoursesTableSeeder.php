<?php

use App\Course;
use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $courses = [
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 4,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 4,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 4,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 12',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 11',
                'institution_id' => 4,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 10',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 10',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 10',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 10',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 10',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 10',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 10',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 10',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 10',
                'institution_id' => 4,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 9',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 9',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 9',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 9',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 9',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 9',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 9',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 9',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 8',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 8',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 8',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 8',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 8',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'Physical Science',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 8',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 8',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Accounting',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 8',
                'institution_id' => 4,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 7',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 7',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 6',
                'institution_id' => 1,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 6',
                'institution_id' => 2,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 7',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 7',
                'institution_id' => 4,
                'price' => null
            ],
            [
                'name' => 'ICT',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 6',
                'institution_id' => 3,
                'price' => null
            ],
            [
                'name' => 'Mathematics',
                 'description' => 'To promote academic excellence, develop leadership skills and build a foundation for future generation of African leaders',
                'level' => 'Grade 6',
                'institution_id' => 4,
                'price' => null
            ],
        ];

        foreach($courses as $id=>$courses)
        {
            $id++;
            $course = Course::create($courses);
            $course->addMedia(public_path("img/course/course_$id.png"))->preservingOriginal()->toMediaCollection('photo');
        }
    }
}
