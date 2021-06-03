<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Lesson;
use App\Quiz;
use App\Activity;

class Category extends Model
{
    protected $fillable = [
        'title', 'description',
    ];

    public function quizzes(){

        return $this->hasMany('App\Quiz');
    }

    public function lessons(){

        return $this->hasMany('App\Lesson');
    }

    public function activities(){

        return $this->morphMany('App\Activity', 'notifiable_type');
    }
}

