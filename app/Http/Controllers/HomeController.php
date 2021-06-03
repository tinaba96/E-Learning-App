<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Result;
use App\Follow;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // session()->flash('flash_message', 'You are logged in');
        // $a = Auth::user()->activities->;
        // dd($a);
        $users = User::all();

        $arr = [];

        // $results = Result::all();
        // Result::where('status', 'Correct')->count();
        // foreach($results as $result){
        //     if($result->status == 'Correct'){
        //         array_push($arr, $result->quiz_id);
        //     }
        // }
        // $cnt = count(array_unique($arr));

        $words = auth()->user()->learnedWords();

        $cnt = count($words);


        // $follow = Follow::where('user_id', Auth::user()->id)->where('follow_id', $followed_user->id)->first();

        return view('home', compact('users', 'cnt'));
    }

    public function list()
    {
        $users = User::all();

        return view('users', compact('users'));
    }

    public function show(User $user)
    {
        $words = $user->learnedWords();

        $cnt = count($words);
        return view('user', compact('user', 'cnt'));

    }

    public function admin_users_list()
    {
        $users = User::all();

        return view('admin_users', compact('users'));
    }

    public function edit(User $user){

        return view('edit_user', compact('user'));
    }

    public function update(User $user, Request $request){

        $user->update([
            'name' => $request->name,
            'nationality' => $request->nationality,
            'email' => $request->email,
            'password' => $request->password,
            'role' => $request->role,
        ]);

        return redirect('/admin/users');
    }

    public function delete(User $user){

        $user->delete();
        return redirect('admin/users');

    }

}
