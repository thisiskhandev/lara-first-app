<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function postFun(string $id = null, string $comment = null)
    {
        // return "<h1>Posts Param: " . $id . "</h1>";
        return view("posts", compact('id', "comment"));
        // if () {
        //     // return "<h1>Posts Param: $id </h1>" . "<h2>Comment: $comment </h2>";
        //     return view("posts");
        // } else {
        //     return "<h1>No Id found</h1>";
        // }
    }
}
