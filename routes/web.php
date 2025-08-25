<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropertyDetailsController;

use App\Http\Controllers\PropertImgController;

use App\Http\Controllers\ServiceRequestsController;
use App\Http\Controllers\LogisticsDetailsController;
use App\Models\property_details;




Route::get('/', function () {
    $properties = property_details::with('images')->latest()->take(6)->get(); // show latest 6
    return view('welcome', compact('properties'));

})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

use App\Http\Controllers\PropertyController;


// Guest property listing

// Guest property detail view
Route::get('/property/{id}', [PropertyDetailsController::class, 'guestShow'])->name('Guest.show');



Route::middleware(['auth'])->group(function() {
    Route::resource('property', PropertyDetailsController::class); // property listings
    Route::resource('property-images', PropertImgController::class); // images
    Route::resource('service-requests', ServiceRequestsController::class); // service requests
    Route::resource('logistics', LogisticsDetailsController::class); // logistics
});





require __DIR__.'/auth.php';
