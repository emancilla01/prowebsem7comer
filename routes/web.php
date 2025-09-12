<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// this route requests log in or register
Route::get('/',function() {
    return view('iniciolog');
});   // remove name to avoid conflict with inertia

// this route for logged in users - normal menu
Route::get('inicio',function() {
    return view('inicio');
})->name('inicio');

Route::get('/login',function() {
    return redirect('/login');
})->name('home');

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
})->middleware('auth');

Route::get('paises',function() {
    $paises = DB::table('country')->paginate(5);
    return view('paises',['paises'=>$paises]);
})->middleware('auth');

Route::get('clientes',function() {
    $clientes = DB::table('customer')->paginate(5);
    return view('clientes',['clientes'=>$clientes]);
})->middleware('auth');

Route::get('ciudades',function() {
    $ciudades = DB::table('city')->paginate(5);
    return view('ciudades',['ciudades'=>$ciudades]);
})->middleware('auth');

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
