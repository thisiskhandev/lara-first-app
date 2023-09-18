<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
    {
        $students = DB::table('students')->get();
        // dd($students);
        // dump($students) // DD breaks code onwards but using dump will continue
        return $students;

        echo "<pre>";
        foreach ($students as $vals) {
            print_r($vals);
        }
        echo "</pre>";
    }
}
