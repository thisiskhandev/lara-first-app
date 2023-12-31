<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\studentSingleController;
use App\Http\Controllers\TestingInvokeController;
use App\Http\Middleware\EnsureTokenIsValid as Authenticate;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get("/about-us", function () {
    return "<a href='/'>Homepage</a> <h1>About US</h1>";
})->name('about');

Route::get('posts/{id?}/comment/{comment?}/', [PostController::class, "postFun"])->name('posts')->whereNumber('id')->whereAlpha('comment');

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

function getUsers()
{
    return [
        ['name' => 'Khan', 'phone' => 99875641231, 'city' => 'Karachi'],
        ['name' => 'Smith', 'phone' => 1234567890, 'city' => 'New York'],
        ['name' => 'Garcia', 'phone' => 9876543210, 'city' => 'Los Angeles'],
        ['name' => 'Johnson', 'phone' => 5551234567, 'city' => 'Chicago'],
        ['name' => 'Liu', 'phone' => 8876543210, 'city' => 'San Francisco'],
        ['name' => 'Kim', 'phone' => 1239874560, 'city' => 'Seoul'],
        ['name' => 'Martinez', 'phone' => 7778889999, 'city' => 'Mexico City'],
        ['name' => 'Chen', 'phone' => 6665554444, 'city' => 'Shanghai'],
        ['name' => 'Brown', 'phone' => 5558887777, 'city' => 'London'],
        ['name' => 'Gonzalez', 'phone' => 9876543210, 'city' => 'Madrid'],
    ];
}

Route::get('/users', function () {
    $user_one = 'Hassan Khan';
    // METHOD 1
    // return view('pages.users', [
    //     'user' => $user_one,
    //     'city' => 'Karachi'
    // ]);

    // METHOD 2
    // return view('pages.users')
    // ->with('user', $user_one)
    // ->with('city', 'Islamabad');

    // METHOD 3
    // return view('pages.users')->withUser($user_one)->withCity('Lahore');

    // return view('pages.users', [
    //     'user' => $user_one,
    //     'city' => ''
    // ]);

    $usersData = getUsers();

    return view('pages.users', ['user' => $usersData]);
})->name('users')->middleware(Authenticate::class);

// Route::get('/user/{id}', function ($id) {
//     $users = getUsers();
//     abort_if(!isset($users[$id]), 404); // Send to 404 if undefined key found in URL param
//     $user = $users[$id];
//     // return print_r($user);
//     return view('pages.single-pages.user', ['userData' => $user, 'id' => $id]);
// })->name('user');

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'showHome')->name('home');
    Route::get('/user/{id}', 'showUser')->name('user');
});

Route::get('/testing', TestingInvokeController::class);

Route::redirect('/about-us', 'about', 301);

// 404
// Route::fallback(function () {
//     return "some error...";
// });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'registerPost'])->name('register');
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
});

Route::group(['middleware' => 'auth'], function () {
    Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::controller(StudentController::class)->group(function () {
        Route::get('/students', 'showStudents')->name('students');
        Route::get('/students/sort={id}&asc', 'orderStudentsAsc')->name('studentsOrderAsc');
        Route::get('/students/sort={id}&des', 'orderStudentsDesc')->name('studentsOrderDesc');
        Route::get('/student/{id}', 'singleStudent')->name('student')->whereNumber('id');
        Route::post('/add', 'addStudent');
        Route::put('/update/{id}', 'updateStudent')->name('update')->whereNumber('id');
        Route::get('/update-student/{id}', 'updateView')->whereNumber('id')->name('update-student');
        Route::get('/delete/{id}', 'deleteStudent')->name('delete')->whereNumber('id');
    });
});

Route::get('/image-all', ImageController::class)->name('imageRoute');
Route::post('/image-upload', [ImageController::class, 'imageUpload'])->name('imagestore');
