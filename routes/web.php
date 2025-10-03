<?php

use App\Models\cliente;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ClienteController;

// Route::get('/', function () {
//     return Inertia::render('Welcome');
// })->name('home');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/',function() {
    return view('inicio');
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
});

Route::get('paises',function() {
    $paises = DB::table('country')->paginate(5);
    return view('paises',['paises'=>$paises]);
});

Route::get('clientes',function() {
    $clientes = DB::table('customer')->paginate(5);
    return view('clientes',['clientes'=>$clientes]);
});

Route::get('ciudades',function() {
    $ciudades = DB::table('city')->paginate(5);
    return view('ciudades',['ciudades'=>$ciudades]);
});

Route::get('clientes.index', [ClienteController::class, 'index']);

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
