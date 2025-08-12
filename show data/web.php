<?php

use App\Http\Controllers\BagController;
use App\Models\Bag; 
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('bag');
});

Route::post('/submit', [BagController::class, 'submit'])->name('bag.submit');

Route::get('/semua', function() {
    $bag = Bag::all();  
    return view('semua', ['bag' => $bag]);
});
