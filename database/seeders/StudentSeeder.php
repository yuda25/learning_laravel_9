<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use App\Models\Student;
use Carbon\Carbon;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        Student::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            [
                'name' => 'Kusuma',
                'gender' => 'L',
                'nis' => '12345',
                'class_id' => 1,
            ],
            [
                'name' => 'Kusumawati',
                'gender' => 'P',
                'nis' => '54321',
                'class_id' => 2,
            ],
            [
                'name' => 'Yuda',
                'gender' => 'L',
                'nis' => '34251',
                'class_id' => 3,
            ],
        ];

        foreach ($data as $value) {
            Student::insert([
                'name' => $value['name'],
                'gender' => $value['gender'],
                'nis' => $value['nis'],
                'class_id' => $value['class_id'],
                'created_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
                'updated_at' => Carbon::now()->setTimezone('Asia/Jakarta'),
            ]);
        }
    }
}
