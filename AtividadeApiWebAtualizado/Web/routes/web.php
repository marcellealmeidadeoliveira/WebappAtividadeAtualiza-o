<?php
use App\Http\Controllers\webappA;

use Illuminate\Support\Facades\Route;

Route::get('/',[webappA::class,'index'])->name('rota.index');

Route::get('/create',[webappA::class,'create'])->name('rota.create');

Route::post('/store',[webappA::class,'store'])->name('rota.store');

Route::get('/edit/{id}',[webappA::class,'edit'])->name('rota.edit');

Route::post('/update/{id}',[webappA::class,'update'])->name('rota.update');

Route::get('/delete/{id}',[webappA::class,'destroy'])->name('rota.destroy');

#################################################################


Route::get('/temporadas', [webappA::class, 'index2'])->name('temporadas.index');