<?php


use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\api\CommentController;
use App\Http\Controllers\api\MainController;
use App\Http\Resources\MainResource;
use Illuminate\Support\Facades\Route;
use App\Events\playgroundEvent;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
*/
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::post('/refresh', [AuthController::class, 'refresh']);
    Route::get('/user-profile', [AuthController::class, 'userProfile']);
});

//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Route::get('/posts','Post')
Route::get('/mains',[MainController::class,'index']);
Route::get('/comments',[CommentController::class,'index']);
Route::get('/comments/{id}',[CommentController::class,'show']);
Route::post('/mains',[MainController::class,'store']);
Route::get('/playground', function (){
            event(new \App\Events\playgroundEvent());
            return null;
        });
Route::get('/play', function (){
            event(new \App\Events\play());
        });
    
//         Route::post('/chat-message', function (\Illuminate\Http\Request $request){
//             event(new ChatMessageEvent($request->message, auth()->user()));
        
//              return null;
//     });
// }