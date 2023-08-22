<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showHome()
    {
        return view('home');
    }
    public function showUser($id)
    {
        $users = getUsers();
        abort_if(!isset($users[$id]), 404); // Send to 404 if undefined key found in URL param
        $user = $users[$id];
        // return print_r($user);
        return view('pages.single-pages.user', ['userData' => $user, 'id' => $id]);
    }
}
