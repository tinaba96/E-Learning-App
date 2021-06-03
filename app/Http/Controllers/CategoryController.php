<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Quiz;
use App\Lesson;

class CategoryController extends Controller
{
    public function show(Category $categories, Quiz $quizzes)
    {
        // $quizzes = Quiz::all();
        $quizzes = Quiz::where('category_id', $categories->id)->get();
        return view('quiz', compact('categories', 'quizzes'));

    }
    public function main_list(Lesson $lessons, Category $categories){

        $categories = Category::all();
        // $lesson_id = $lessons->id;
        $lesson_id = $lessons->count();
        // dd($lessons->count());

        return view('list_categories', compact('categories', 'lesson_id'));
    }

    public function list(Category $categories){

        $categories = Category::all();

        return view('categories', compact('categories'));
    }

    public function create(Category $categories){
        $categories = Category::all();

        return view('create_category', compact('categories'));
    }

    public function store(Category $categories, Request $request){


        Category::create([
            'title' => $request->title,
            'description' => $request->description
        ]);

        $categories = Category::all();

        return view('categories', compact('categories'));
    }


    public function edit(Category $categories){

        return view('edit', compact('categories'));
    }

    public function update(Category $categories, Request $request){

        $categories->update([
            'title' => $request->title,
            'description' => $request->description
        ]);

        return redirect('/admin/categories');
    }

    public function delete(Category $categories){
        $categories->delete();
        return redirect('admin/categories');
    }

}
