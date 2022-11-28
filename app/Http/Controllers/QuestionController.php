<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function question(Question $question)
    {
        return view('questions/question')->with(['questions' => $question->get()]);
    }
    
    public function create()
    {
        return view('posts/question-create');
    }
    
    public function store(Request $request, Question $question)
    {
        $input = $request['question'];
        $gallery->fill($input)->save();
        return redirect('/questions/' . $question->id);
    }
}
