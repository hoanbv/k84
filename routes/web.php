<?php

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
//Route::phuong_thuc('/',1 function xu li ()
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('index', function () {
        return 'asdfdaf';
});
Route::get('users/{name}/a/{year?}', function ($name, $year='2019') {
    return $name.'<br>'.$year;
  
});



Route::get('','UserController@getUser' );
Route::get('add','UserController@getAddUser');

Route::post('add','UserController@postAddUser');

Route::get('edit/{idUser}','UserController@getEditUser' );
Route::post('edit/{idUser}','UserController@postEditUser' );
Route::get('edit/{idUser}', 'UserController@deleteUser' );

// Route::get('test', function () {
//     $user = DB::table('users')->get();
//     dd($user);
// });
//su dung model
// lay toan bo du lieu trong table
Route::get('get-all', function () {
    $users=App\Models\Users::all()->toArray();
    // foreach($users as $key => $value){
    //     echo $value['full'].'->'.$value['phone'].'<br>';
    // }
   // dd($users[0]['full']) ;
        dd($users);

});
// them data vao database
Route::get('insert-data', function () {
    $user =new App\Models\Users;
    $user->full="hoan";
    $user->phone="25843579";
    $user->address="vietnam";
    $user->id_number="1726721562";
    $user->save();
    echo 'da them thanh cong';
});
//sua data trong database
Route::get('update-data', function () {
    $user =  App\Models\Users::find(51);
    $user->full="hoanedit";
    $user->phone="999999999";
    $user->address="lao";
    $user->id_number="6y6456";
    $user->save();
    echo 'da sua thanh cong';
});
//xoa 
Route::get('delete-data', function () {
    $user = App\Models\Users::destroy(52);
    // xoa theo khoa chinh
    echo 'da xoa thanh cong';
});