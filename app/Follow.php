<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    protected $fillable = [
        'user_id', 'follow_id',
    ];

    public function users()
    {
        return $this->belongsTo('App\User');
    }

    public function activity(){

        return $this->morphOne('App\Activity', 'notifiable');
    }

    public function followed()
    {
        return $this->belongsTo('App\User', 'follow_id');
    }

    public function follower()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

}
