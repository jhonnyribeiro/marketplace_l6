<?php

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
    return view('welcome');
});

Route::get('/model', function () {
//    $products = \App\Product::all(); // select * from products
//
//    $user= new \App\User();
//    $user = \App\User::find(1);
//    $user->name = 'Usuario Teste alter...';
//    $user->email = 'email@teste.com';
//    $user->password = bcrypt('12345678');
//
//    return $user->save();
//    $user->save();

    // \App\User::all() retorna todos os usuários
    // \App\User::find(1) retorna usuario especifico
//    return \App\User::where('name', 'Geo Schuster')->get(); // select * from users where name = 'Geo Schuster'
    //return \App\User::where('name', 'Geo Schuster')->first(); // select * from users where name = 'Geo Schuster' pega primeir registro encontrado

    return \App\User::paginate(10);
});
