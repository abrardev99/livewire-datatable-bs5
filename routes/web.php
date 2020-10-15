<?php

use App\Http\Livewire\Post\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//livewire datatables
Route::get('/post', Index::class);



