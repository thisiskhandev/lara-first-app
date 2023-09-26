<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function showStudents()
    {
        // $students = DB::table('students')->get()->sortByDesc('id');

        // $students = DB::table('students')
        //     ->orderBy('name')
        //     ->where('age', '>', 30)
        //     ->simplePaginate(4);

        // $students = DB::table('students')->paginate(4, ['id', 'name', 'email'], 'p', 2);
        // $students = DB::table('students')->paginate(5, ['*'], 'p', 1)->appends(['sort', 'votes']);
        $students = DB::table('students')->orderByDesc('id')->paginate(5);
        // $students = DB::table('students')->orderBy('id')->cursorPaginate(5);
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

    public function addStudent(Request $req)
    {

        // $student = DB::table('students')->upsert([
        //     'name' => 'stu55',
        //     'email' => 'stu4@mail.com',
        //     'city' => 'Lahore',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        //     'age' => 19,
        //     'address' => 'stu4 house 123'
        // ], ['email']);

        // return $req;

        $student = DB::table('students')->insert([
            'name' => $req->name,
            'email' => $req->email,
            'city' => $req->city,
            'created_at' => now(),
            'updated_at' => now(),
            'age' => $req->age,
            'address' => $req->address,
        ]);

        if ($student) {
            return redirect()->route('students');
            // return response()->json(['message' => 'Student has been created'], 201);
        } else {
            echo "<h1>ERROR while creating a student</h1>";
        }

        return $student;
    }

    public function deleteStudent($id)
    {
        $student = DB::table('students');
        $student->delete($id);
        return redirect()->route('students');
    }

    public function updateStudent(Request $req, $id)
    {
        // dd($id);
        $student = DB::table('students')
            ->where('id', $id)
            ->update([
                'name' => $req->name,
                'email' => $req->email,
                'city' => $req->city,
                'updated_at' => now(),
                'age' => $req->age,
                'address' => $req->address,
            ]);

        if ($student && $req) {
            return redirect()->route('students');
        } else {
            echo "<script>alert('data cant be null!')</script>";
        }
    }

    public function updateView($id)
    {
        $student = DB::table('students')->find($id);
        abort_if(!isset($student), 404); // If not found redirect to 404
        return view('pages.update-student', ['student' => $student]);
    }
}
