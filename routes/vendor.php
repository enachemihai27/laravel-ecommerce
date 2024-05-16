<?php

use App\Http\Controllers\Backend\VendorController;
use Illuminate\Support\Facades\Route;

/*Vendor Routes*/
Route::middleware(['auth', 'role:vendor'])->prefix('vendor')->as('vendor.')->group(function () {

    Route::get('dashboard', [VendorController::class, 'dashboard'])->name('dashboard');

});
