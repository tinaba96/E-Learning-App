<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nationality', 'email', 'password', 'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function follows(){
        return $this->hasMany('App\Follow', 'follow_id', 'id');
    }

    public function followers(){
        return $this->belongsToMany('App\User', 'follows', 'follow_id', 'user_id');
    }

    public function following(){
        return $this->belongsToMany('App\User', 'follows', 'user_id', 'follow_id');
    }

    public function is_following($followed_id){
        if( $this -> following()->where('follow_id', $followed_id)->count() > 0){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function learnedWords()
    {
        $lessons = $this->lessons;

        $words = [];
        $learnedWords = [];

        foreach ($lessons as $lesson) {
            foreach ($lesson->results as $result) {
                if ($result->status == 'Correct' && !in_array($result->quiz_id, $learnedWords)) {
                    array_push($words, $result->quiz);
                    array_push($learnedWords, $result->quiz_id);
                }
            }
        }

        return $words;
    }
}
