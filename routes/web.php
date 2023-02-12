<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MangoController;
use Faker\Guesser\Name;
use App\Http\Controllers\Studentsresult;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::controller(MangoController::class)->group(function(){
    Route::post('postuser', 'PostUser')->name('postuser');
    Route::get('Fetch-TeamData', 'FetchTeamData')->name('FetchTeamData');
    Route::get('/team-Details/{id}', 'TeamDetails');
    
});
Route::get('/', function () {
    return view('Mangosent.index');
});
Route::get('/about-us', function () {
    return view('Mangosent.about-us');
});
Route::get('/services', function () {
    return view('Mangosent.services');
});
Route::get('/contact', function () {
    return view('Mangosent.contact');
});
        // Students Controller 
Route::controller(Studentsresult::class)->group(function(){
    Route::get('studentsresult','index');
    Route::post('fetchstudents','FetchStudents')->name('fetch.students');
});