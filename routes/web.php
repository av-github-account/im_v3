<?php

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
   return 'hello, yeyu!';

});


//http://127.0.0.1:8000/test/?name=fff - выводит на экран содержимое переменной: 'fff'
Route::get('/test', function () {
   $name = request('name');
   return $name;
});


//http://127.0.0.1:8000/test1/?name=abcd - выводит на экран содержимое переменной: 'abcd'
//Передал переменную $name во View('test1'
Route::get('/test1', function () {
   $name = request('name');
   return View('test1', [
      'name' => $name]);
});


//http://127.0.0.1:8000/test2/?name=<script>alert('hello');</script> - вызывает всплывающее окно (в сафари не срабатывает)
//Передал параметр 'name' во View('test2'
Route::get('/test2', function () {
   return View('test2', [
      'name' => request('name')
   ]);
});


Route::get('/test3/{abc}', function($abc) {
      $cats = [
         'page1' => 'Страница 1!',
         'page2' => 'Страница 2!'
      ];

      if (! array_key_exists($abc,$cats)) {
         abort(404, 'Извините, страница не найдена!');
      };

      return view('test3',[
         'cat' => $cats[$abc] //?? 'Nothing yet here!'  //<- если нет page1 и page2
      ]);
});

Route::get('/test4/{abc}', 'TestsController@show'); //<- тоже самое что и в test3, только выполнено через контроллер



//=============================
//=============================
Route::get('/posts/{abc}', 'PostsController@show'); 















//
