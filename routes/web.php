<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Illuminate\Support\Facades\DB;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/',function() {
    return view('inicio');
});

Route::get('catalogos',function() {
    return view('catalogos');
})->middleware('auth');

Route::get('compras',function() {
    return view('compras');
})->middleware('auth');

Route::get('/logout',function(){
    Auth::logout();
    return redirect('/');
});

Route::get('actores',function() {
    // $actores = DB::select('SELECT * FROM actor');
    $actores = DB::table('actor')->paginate(5);
    // return $actores;
    return view('actores',['actores'=>$actores]);
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
