<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CustomerController;
use \App\Http\Controllers\IngredientPizzaController;
use \App\Http\Controllers\OrderPizzaController;
use \App\Http\Controllers\OrderController;
use \App\Http\Controllers\PizzaController;
use \App\Http\Controllers\winkelmandController;


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




Route::group(['middleware'=>'auth'], function() {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth'])->name('dashboard');

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/resetpassword/{id}', [AdminController::class, 'resetpassword'])->name('admin.resetpassword');
    Route::put('/admin/updatepassword/{id}', [AdminController::class, 'updatepassword'])->name('admin.updatepassword');

    Route::resource('role', RoleController::class);
    Route::resource('user', UserController::class);
    Route::resource('employee', EmployeeController::class);
    Route::resource('customer', CustomerController::class);
});
require __DIR__.'/auth.php';

Route::get('/pizzas', [PizzaController::class, 'index'])->name('pizzas.index');

//ingredienten bewerken van een pizza(nog niet compleet)
Route::get('/pizza/{id}/bewerken', [IngredientPizzaController::class, 'edit'])->Name ('ingredient-wijzig.edit');
Route::put('/pizza/{id}', [IngredientPizzaController::class, 'update'])->Name ('ingredient-wijzig.update');

//home pagina waar de klant zijn gegevens kan invullen.
Route::get('/', [OrderController::class, 'index'])->Name('order.index');

//order/klant maken
Route::post('/order',[OrderController::class ,'store'])->Name('order.store');

//nadat de klant zijn gegevens ingevuld heeft en op verder geklinkt heeft gaat hij naar de pagina om de pizzas te bestellen
Route::get('/order/{order}/pizzas',[OrderController::class,'show'])->name('order.pizzas');


//pizzas bestellen (order en pizza in de tussen voegen -> (order_pizza)table)
Route::post('/order/{orderid}/pizzas/{pizzaid}',[OrderPizzaController::class,'store'])->name('order_pizzas.store');


//de show weergeeft de winkelmand.blade.php met de order/klant gegevens en de pizzas die de klant heeft aan zijn bestelling toegevoegd.
Route::get('/winkelmand/{orderid}',[OrderPizzaController::class,'show'])->name('orders.show')->name('winkelmand.show');

//verwijder een pizza van de bestelling
Route::post('/pizza/delete/{pizzaid}/{orderid}',[OrderPizzaController::class,'destroy'])->name('order_pizzas.destroy');

//bestelling afronden
Route::put('/winkelmad/{orderid}', [OrderController::class, 'update'])->Name ('winkelmand-status.update');
Route::get('/order/{orderid}/status', [OrderController::class, 'edit'])->Name ('winkelmand-status.edit');


Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});


