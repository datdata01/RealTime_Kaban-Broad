<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\LaneController;
use App\Http\Controllers\api\TicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/lanes',[LaneController::class,'index']);
Route::get('/tickets/move',[TicketController::class,'store']);