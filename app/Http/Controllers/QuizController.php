<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizController extends Controller
{
  public function store(Request $request)
  {
    // 入力内容を検証

    // データを保存

    return view('quizzes.index');
  }
}
