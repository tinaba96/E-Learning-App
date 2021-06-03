<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\User;
use App\Quiz;

class QuizController extends Controller
{
    //
    public function create(Quiz $quizzes, Category $categories){

        return view('create_quiz', compact('categories', 'quizzes'));
    }

    public function store(Quiz $quizzes, Category $categories, Request $request){


        Quiz::create([
            'category_id' => $categories->id,
            'text' => $request->text,
            'choice1' => $request->choice1,
            'choice2' => $request->choice2,
            'choice3' => $request->choice3,
            'choice4' => $request->choice4,
            'answer' => $request->answer,

        ]);

        // $categories = Category::all();
        // $quizzes = Quiz::all();
        $quizzes = Quiz::where('category_id', $categories->id)->get();

        return view('quiz', compact('quizzes', 'categories'));
    }

    public function edit(Category $categories, Quiz $quizzes){

        return view('edit_quiz', compact('categories', 'quizzes'));
    }

    public function update(Category $categories, Quiz $quizzes, Request $request){

        $quizzes->update([
            'category_id' => $categories->id,
            'text' => $request->text,
            'choice1' => $request->choice1,
            'choice2' => $request->choice2,
            'choice3' => $request->choice3,
            'choice4' => $request->choice4,
            'answer' => $request->answer,

        ]);

        return redirect('admin/categories/'.$categories->id);
    }

    public function delete(Category $categories, Quiz $quizzes){
        $quizzes->delete();
        return redirect('admin/categories/'.$categories->id);
    }

}
