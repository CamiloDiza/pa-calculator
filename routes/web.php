<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/locale/{locale}', function (string $locale) {
    if (! in_array($locale, ['en', 'es', 'fr', 'de', 'pt', 'it'])) {
        abort(400);
    }

    session()->put('locale', $locale);

    return back();
})->name('locale');
