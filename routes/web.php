<?php

use App\Events\playgroundEvent;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
// Route::get('/reset-password/{token}', function ($token){
//     return view('auth.password-reset', [
//         'token' => $token
//     ]);
// });
        Route::get('/playground', function (){

            event(new playgroundEvent());
    //        $url = URL::temporarySignedRoute('share-video', now()->addSeconds(30), [
    //            'video' => 123
    //        ]);
    //        return $url;
           return null;
        });
    
    //     Route::get('/ws', function (){
    //         return view('websocket');
    //     });
    
    //     Route::post('/chat-message', function (\Illuminate\Http\Request $request){
    //         event(new ChatMessageEvent($request->message, auth()->user()));
        
    //       return null;
    // });