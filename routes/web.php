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
    // return \App\User::where('name', 'Geo Schuster')->get(); // select * from users where name = 'Geo Schuster'
    // return \App\User::where('name', 'Geo Schuster')->first(); // select * from users where name = 'Geo Schuster' pega primeir registro encontrado


    //////////// Mass Assigment - Atribuição em Massa
//    $user = \App\User::create(
//        [
//            'name' => 'Doidão malucoo',
//            'email' => 'email@doidaomaluco.com',
//            'password' => bcrypt('12345678')
//        ]
//    ); //retorna o objeto inserido no banco
//
//    dd($user);

    ///////////// Mass update

//$user = \App\User::find(42);
//$user = $user->update([
//    'name' => 'Atualizando com mas update'
//]); // retorna apenas true or false
//
//dd($user);


    //Como eu faria para pegar a loja de um usuário
    //$user = \App\User::find(4);

    //dd($user->store()->count()); //O objeto único (Store) se for Collection de Dados(Objetos)

    //Pegar os produtos de uma loja?
//	$loja = \App\Store::find(1);
//  return $loja->products;

    //$loja->products()->where('id', 9)->get();

    //Pegar as lojas de uma categoria de uma loja?
//	$categoria = \App\Category::find(1);
//	$categoria->products;


    //  return \App\User::paginate(10);

    //Criar uma loja para um usuário
//	$user = \App\User::find(10);
//	$store = $user->store()->create([
//		'name' => 'Loja Teste',
//		'description' => 'Loja Teste de produtos de informática',
//		'mobile_phone' => 'XX-XXXXX-XXXX',
//		'phone' => 'XX-XXXXX-XXXX',
//		'slug'  => 'loja-teste'
//	]);
//
//	dd($store);


    //Criar um produto para uma loja
//	$store = \App\Store::find(41);
//	$product = $store->products()->create([
//		'name' => 'Notebook Dell',
//		'description' => 'CORE I5 10GB',
//		'body' => 'Qualquer coisa...',
//		'price' => 2999.90,
//		'slug' => 'notebook-dell',
//	]);
//
//	dd($product);


    //Criar uma categoria

//	\App\Category::create([
//		'name' => 'Games',
//		'slug' => 'games'
//	]);
//
//	\App\Category::create([
//		'name' => 'Notebooks',
//		'slug' => 'notebooks'
//	]);
//
//	return \App\Category::all();


    //Adicionar um produto para uma categoria ou vice-versa

//	$product = \App\Product::find(49);
//
//	dd($product->categories()->sync([2]));
//
//    $product = \App\Product::find(49);
//
//    return $product->categories;
});


Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::prefix('stores')->group(function () {

        Route::get('/', 'StoreController@index');
        Route::get('/create', 'StoreController@create');
        Route::post('/store', 'StoreController@store');
        Route::get('/{store}/edit', 'StoreController@edit');
        Route::post('/update/{store}', 'StoreController@update');
        Route::get('/destroy/{store}', 'StoreController@destroy');
    });
});
