<?php
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
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

Auth::routes();

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::post('/profile/update', 'ProfileController@updateprofile')->name('profile.update');





Route::group(['middleware' => ['web','auth']],function(){
    Route::get('/home',function(){
        if(Auth::user()->role_id ==1){ 


            $getmyid = Auth::user()->id ;
            $users['users']=\App\User::where('owner_id', $getmyid)->get();     
            return view('owner',$users);
        }
        else{

            return view('tenant');
            
        }
    });
});