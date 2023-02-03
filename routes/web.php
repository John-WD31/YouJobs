<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

//index - Show 
//index -show all data -> listings
//show - show single data --> listing
//create - show for to create new --> listing
//store - store data --> new listing
//editt - show form to edit data
//updatte - update
//destroy - delete a data

//ALL Listing
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('listings/create', [ListingController::class, 'create']);

//Store Listing Data
Route::post('listings', [ListingController::class, 'store']);

//Show Edit Form
Route::get('listings/{listing}/edit', [ListingController::class, 'edit']);

//update listing
Route::put('listings/{listing}', [ListingController::class, 'update']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register / Create Form
Route::get('/register', [UserController::class, 'create']);



// ($id){
//     $listing = Listing::find($id);

//     if($listing) {
//  return view('listing', [
//         'listing' => $listing
//     ]);
// } else {
//     abort('404');
// }
// });