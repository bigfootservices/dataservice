<?php

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
    $locations = \App\Models\Location::has('report')
        ->with(['report' => ['geocode']])
        ->whereNotNull(['locations.latitude', 'locations.longitude'])
        ->get();

    $notFound = \App\Models\Report::doesntHave('location')->get()->count();

    return inertia('welcome', ['locations' => $locations, 'notFound' => $notFound]);
});
