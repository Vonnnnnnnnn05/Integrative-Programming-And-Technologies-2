<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Subject;

class CourseController extends Controller
{
     public function index()
    {
        return view('courses', [
            'courses' => Course::all(),
            'subjects' => Subject::with('course')->get()
        ]);
    }
}
