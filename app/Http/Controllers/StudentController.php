<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
    {
        $students = DB::table('students')->get()->sortByDesc('id');
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
        $stdDataByDate = DB::table('students')->whereDate('created_at', '2023-09-18')->whereDate('updated_at', '2023-09-20')->orderByDesc('id')->get();
        $stdAge = DB::table('students')->where('age', '>', 25)->get();
        $stdEmail = DB::table('students')->whereNot('email')->get();
        // return $stdDataByDate;

        return view('pages.students', ['cStdData' => $students]);
    }

    public function singleStudent($id)
    {
        $student = DB::table('students')->find($id);
        $studentDate = Carbon::parse($student->updated_at)->format('Y-m-d');
        $student->updated_at = $studentDate;
        // dd($student);
        abort_if(!isset($student), 404); // If not found redirect to 404
        return view('pages.single-pages.student', ['student' => $student]);
    }
}
