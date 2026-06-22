<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Lat1Controller;
use App\Models\Product;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lat1', [Lat1Controller::class, 'index']);
Route::get('/lat1/m2', [Lat1Controller::class, 'method2']);

Route::get('/test-relasi', function () {
    $prods = Product::with('variants')->get();

    foreach ($prods as $p) {
        echo "Product: " . $p->name . "<br>";

        foreach ($p->variants as $v) {
            echo "Variant: " . $v->name . "<br>";
        }

        echo "<br>";
    }
});