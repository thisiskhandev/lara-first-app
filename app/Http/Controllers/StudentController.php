<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
    {
        $students = DB::table('students')->get();
        // return $students;
        // dd($students);
        // dump($students) // DD breaks code onwards but using dump will continue

        // $students = DB::table('students')->where('name', 'Edwin Hill')->first();
        // return $students->email;

        // $students = DB::table('students')->pluck('email');
        // return $students;

        // echo "<pre>";
        // foreach ($students as $vals) {
        //     // print_r($vals);
        //     echo $vals . "<br>";
        // }
        // echo "</pre>";

        // $stdDataByDate = DB::table('students')->whereDate('created_at', '2023-09-18')->get();
        $stdDataByDate = DB::table('students')->whereDate('created_at', '2023-09-18')->whereDate('updated_at', '2023-09-20')->get();
        $stdAge = DB::table('students')->where('age', '>', 25)->get();
        $stdEmail = DB::table('students')->whereNot('email')->get();
        return $stdEmail;

        return view('pages.students', ['cStdData' => $students]);
    }
}
