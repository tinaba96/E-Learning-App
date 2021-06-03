<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Follow;
use App\User;
use App\Activity;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{
    // public function follow(User $user, Request $requests){


    //     $follow = Follow::Create([
    //         'user_id' => Auth::user()->id,
    //         'follow_id' => $user->id
    //     ]);

    //     dd($follow);

    //     // Activity::Create([
    //     //     'user_id' => Auth::user()->id,
    //     //     'notifiable_type'=> 'follow',
    //     //     'content' => $user->id
    //     // ]);


    //     return back();
    // }

    // public function unfollow(Follow $follows){

    //     Auth::user()->follows->first->delete();

    //     return back();
    // }

    public function follow($id){


        $followed_user = User::find($id);
        Auth::user()->following()->attach($followed_user);
        $follow = Follow::where('user_id', Auth::user()->id)->where('follow_id', $followed_user->id)->first();
        $follow->activity()->create([
            'user_id' => Auth::user()->id,
            // 'notifiable_id'=> 'follow',
            'content' => User::find($followed_user->id)->name
        ]);

        return back();
    }

    public function unfollow($id){
        $followed_user = User::find($id);
        $follow = Follow::where('user_id', Auth::user()->id)->where('follow_id', $followed_user->id)->first();
        Auth::user()->following()->detach($followed_user);

        $follow->activity()->delete();



        return back();
    }

    public function following($id){
        $user = User::find($id);
        $follows = $user->following()->get();
        return view('follows', compact('follows', 'user'));
    }

    public function followers($id){
        $user = User::find($id);
        $follows = $user->followers()->get();
        return view('follows', compact('follows', 'user'));
    }
}

