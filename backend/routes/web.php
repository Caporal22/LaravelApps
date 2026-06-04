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
