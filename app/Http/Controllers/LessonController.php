<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Lesson;
use App\Category;
use Illuminate\Support\Facades\Auth;

class LessonController extends Controller
{
    public function list(Lesson $lesson)
    {
        $quizzes = $lesson->category->quizzes()->Paginate(1);

        return view('take_quiz', compact('quizzes', 'lessons'));
    }

    public function store(Request $requests){
        $lesson = Lesson::create([
            'user_id' => Auth::user()->id,
            'category_id' => $requests->category_id
        ]);

        $lesson->activity()->create([
            'user_id' => Auth::user()->id,
            'content' => $lesson->category->title
        ]);
        // dd($lesson->category->title);

        return redirect('categories/lessons/'. $lesson->id );
    }
}
