<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = [
        'user_id', 'notifiable_type', 'content',
    ];


    public function notifiable()
    {
        return $this->morphTo();
    }


}
