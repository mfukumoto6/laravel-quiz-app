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
  return view('welcome');
});

Route::get('quizzes', function () {
  return view('quizzes.index');
})->name('quizzes.index');

Route::get('quizzes/show', function () {
  return view('quizzes.show');
})->name('quizzes.show');

Route::get('quizzes/create', function () {
  return view('quizzes.create');
})->name('quizzes.create');

Route::delete('quizzes/{id}', function ($id) {
  return json_encode(['message' => 'ID:' . $id . ' が削除されるIDです(仮の出力)']);
})->name('quizzes.delete');

// POSTのリクエストが来た時にどういったコントローラを呼ぶか、ここではstoreメソッド
// POSTメソッドで'quizzes'のURLにリクエストが来たときに、自動的にQuizControllerのstoreメソッドを呼ぶ
Route::post('quizzes', 'App\Http\Controllers\QuizController@store')->name('quizzes.store');
