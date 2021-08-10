<?php

use App\Models\Employer;
use App\Models\Skill;
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

Route::get('/', function () {
    return view('resume', [
        'employers' => Employer::orderBy('sort_order', 'ASC')->get(),
        'skills' => Skill::orderBy('stars', 'DESC')->orderBy('sort_order', 'ASC')->get()
    ]);
});
