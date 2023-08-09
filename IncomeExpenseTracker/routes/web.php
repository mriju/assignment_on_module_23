<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\ExpenseController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

// Incomes routes
Route::get('/incomes', [IncomeController::class, 'index'])->name('incomes.index');
Route::get('/incomes/create', [IncomeController::class, 'create'])->name('incomes.create');
Route::post('/incomes', [IncomeController::class, 'store'])->name('incomes.store');
Route::get('/incomes/{income}/edit', [IncomeController::class, 'edit'])->name('incomes.edit');
Route::put('/incomes/{income}', [IncomeController::class, 'update'])->name('incomes.update');
Route::delete('/incomes/{income}', [IncomeController::class, 'destroy'])->name('incomes.destroy');

// Expenses routes
Route::get('/expenses', [ExpenseController::class, 'index'])->name('expenses.index');
Route::get('/expenses/create', [ExpenseController::class, 'create'])->name('expenses.create');
Route::post('/expenses', [ExpenseController::class, 'store'])->name('expenses.store');
Route::get('/expenses/{expense}/edit', [ExpenseController::class, 'edit'])->name('expenses.edit');
Route::put('/expenses/{expense}', [ExpenseController::class, 'update'])->name('expenses.update');
Route::delete('/expenses/{expense}', [ExpenseController::class, 'destroy'])->name('expenses.destroy');