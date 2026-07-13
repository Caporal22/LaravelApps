<?php

use App\Http\Controllers\EntradaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\select;

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
    $entradas = DB::table('entradas')
        ->where('user_id', 1)
        ->where('titulo','LIKE', 'a%')
        ->orWhere('titulo', 'LIKE', 'b%')
        ->get();
    return $entradas;
});

// whereNull()
// whereNotNull()
// whereIn()
// whereNotIn()
// whereBetween()
// whereNotBetween()

Route::get('join', function(){
    $entradas = DB::table('entradas')
    ->join('users', 'entradas.user_id', '=', 'users.id')
    ->select('entradas.id','entradas.titulo', 'entradas.tag', 'entradas.imagen', 'users.email')
    ->get();
    return $entradas;
});

// leftJoin()
// rightJoin()
// joinWhere()

// Inserción de registros

Route::get('/insert', function(){
    $insertado = DB::table('users')
        ->insert([
            "name" => "Juan Pérez",
            "email" => "juan@prueba.com",
            "password" => "juan",
        ]);
    return $insertado;
});

// Obtener
Route::get('/getId', function(){
    $id = DB::table('users')
        ->insertGetId([
            "name" => "Juan Pérez",
            "email" => "juanito@prueba.com",
            "password" => "juan",
        ]);
    return $id;
});

// Controladores

// Route::get('entrada', [EntradaController::class, 'index']);

// Route::resource('entrada', EntradaController::class);

// Route::resource('entrada', EntradaController::class)->only('index', 'show');

Route::resource('entrada', EntradaController::class)->except('destroy', 'update');

Route::get('respuesta', function() {
        return response('Hola, esta es una respuesta', 200);
});

Route::get('respuesta2', function() {
        return response('Hola, esta es una respuesta', 404);
});