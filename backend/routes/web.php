<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome');
});

Route::get('probar_conexion', function(){
    try {
        DB::connection()->getPdo();
        return "Conexión a la Base de datos exitosa";
    } catch (\Exception $e) {
        return "No se puede conectar a la base de datos. <br> Error: " . $e->getMessage();
    }
});

// Query builder
Route::get('query', function () {
    $entradas = DB::table('entradas')->get();
    return $entradas;
});

// Obtener el primer registro
Route::get('find', function () {
    $entradas = DB::table('entradas')->first();
    return $entradas;
});

// Filtrado de datos
Route::get('filtro', function () {
    $entradas = DB::table('entradas')->where('user_id', 1)->where('titulo','LIKE', '%a%')->get();
    return $entradas;
});