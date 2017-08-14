<?php
use App\User;

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

 Route::auth();


Route::get('/home', 'HomeController@index')->name('home');



Route::get('hr',function(){


	return view('welcome');


});


 Route::get('xa',function(){


return User::all();
 });

 Route::post('xa2',function(){

   $u = file_get_contents('php://input'); //VUE.post
   $m = json_decode($u,true);
 //  var_dump($m);
  echo $m['email']."<br><br>".$m['hp'];
return User::all();
 });




Route::group(['middleware'=>'admin'],function(){



 Route::resource('/admin/users','AdminUsersController');

 Route::resource('/admin/posts','AdminPostsController');

});

Route::get('/admin',function(){

	return view('admin.index');

});


