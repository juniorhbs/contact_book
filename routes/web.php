<?php

use App\Http\Controllers\ContactController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/',[ContactController::class, 'index'])->name('contact.index');
Route::get('/cadastrar',[ContactController::class, 'add'])->name('contact.add');
Route::post('/cadastrar',[ContactController::class, 'store'])->name('contact.store');
Route::get('/editar/{id}',[ContactController::class, 'edit'])->name('contact.edit');
Route::put('/atualizar/{id}',[ContactController::class, 'update'])->name('contact.update');
Route::delete('/deletar/{id}',[ContactController::class, 'destroy'])->name('contract.destroy');

