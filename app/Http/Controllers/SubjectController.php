<?php

namespace App\Http\Controllers;
use App\Models\Subject;        

use Illuminate\Http\Request;

class SubjectController extends Controller
{
     public function index()
    {
        return view('courses', [
            'subject' => Subject::all()
        ]);
    }
    
}
