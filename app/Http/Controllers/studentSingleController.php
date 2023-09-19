<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class studentSingleController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showSingleStudent($id)
    {
        $student = DB::table('students')->find($id);
        dump($student);
        abort_if(!isset($student), 404); // If not found redirect to 404
        return view('pages.single-pages.student', ['student' => $student]);
    }
}
