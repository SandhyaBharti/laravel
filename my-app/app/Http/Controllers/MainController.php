<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    private $courses = [
        1 => 'C Programming',
        2 => 'C++',
        3 => 'C#',
        4 => 'Perl',
    ];

    public function showCourse($id)
    {
        $courseName = $this->courses[$id] ?? 'Invalid Course Selected!';

        return view('course', [
            'courseId'   => $id,
            'courseName' => $courseName,
        ]);
    }

    public function listCourses()
    {
        return view('courses_list', [
            'courses' => $this->courses,
        ]);
    }
}